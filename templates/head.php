<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <?php if ( defined('BASIC_AUTH') ): ?>
    <script type="text/javascript">
      var _basic_auth = '<?= BASIC_AUTH ?>';
    </script>
  <?php endif; ?>
</head>
