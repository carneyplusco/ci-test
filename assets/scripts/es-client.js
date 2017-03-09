import Mustache from 'mustache';

const Party = (function($) {
  var results_limit = 10;
  var current_result_index = 0;
  var result_template;
  var esclient;

  function start(client_config) {
    esclient = client_config;

    // ElasticSearch JQuery client
    var client = new $.es.Client({
      host: esclient.es_host
    });

    var query = $('.search-form').find('input').val();

    // If not search results page, redirect
    // If search results page, call query with pagination enabled
    $.when(loadResultTemplate())
      .then(function(data) {
        result_template = data;
        if(query !== '') {
          search(client, query);
        }
      });

    // "LOAD MORE" listener
    $('#ajax-results').click(function(e) {
      e.preventDefault();
      current_result_index += results_limit;
      search(client, query);
    });
  }

  //
  // function definitions
  //

  function displayResults(results) {
    if ($(results).length == 0) {
      noResults();
    } else {
      var data = {
        search_results: results.map(result => {
          var { id, internationals, name: title } = result._source;
          return { id, internationals, title };
        }),
        international_roles: function() {
          return this.roles.join(', ')
        }
      };
      var rendered = Mustache.render(result_template, data);
      $('#search-results').append(rendered);
      $('#ajax-results').toggle($(results).length >= results_limit);
    }
  }

  function loadResultTemplate() {
    return $.get(`${esclient.template_dir}/templates/search-result.mst`, (template) => template);
  }

  function noResults() {
    $('#ajax-results').hide();
    $.get(`${esclient.template_dir}/templates/no-results.mst`, (template) => {
      var rendered = Mustache.render(template);
      $('#search-results').html(rendered);
    });
  }

  function search(client, query) {
    // query names of artist, exhibition, and role of participant
    console.log(client);
    client.search({
      index: 'party',
      type: 'record',
      body: {
        query: {
          "multi_match": {
            "query": query,
            "fields": ["name", "internationals.name", "internationals.roles"]
          }
        }
      },
      // PAGINATION OPTIONS
      size: results_limit,
      from: current_result_index
    }).then(function (resp) {
      var hits = resp.hits.hits;
      displayResults(hits);

    }, function (err) {
      console.trace(err.message);
    });
  }

  return {
    start
  }

})(jQuery);

export default Party;
