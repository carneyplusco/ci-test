const exhibition_dates = [
  {
  	id: 187,
  	name: "First Annual Exhibition",
  	date: "11/05/1896"
  },
  {
  	id: 188,
  	name: "Second Annual Exhibition",
  	date: "11/04/1897"
  },
  {
  	id: 189,
  	name: "Third Annual Exhibition",
  	date: "11/03/1898"
  },
  {
  	id: 190,
  	name: "Fourth Annual Exhibition",
  	date: "11/02/1899"
  },
  {
  	id: 191,
  	name: "Fifth Annual Exhibition",
  	date: "11/01/1900"
  },
  {
  	id: 192,
  	name: "Sixth Annual Exhibition",
  	date: "11/07/1901"
  },
  {
  	id: 193,
  	name: "A Loan Exhibition of Paintings",
  	date: "11/06/1902"
  },
  {
  	id: 194,
  	name: "Eighth Annual Exhibition",
  	date: "11/05/1903"
  },
  {
  	id: 195,
  	name: "Ninth Annual Exhibition",
  	date: "11/03/1904"
  },
  {
  	id: 196,
  	name: "Tenth Annual Exhibition",
  	date: "11/02/1905"
  },
  {
  	id: 197,
  	name: "Eleventh Annual Exhibition",
  	date: "04/11/1907"
  },
  {
  	id: 198,
  	name: "Twelfth Annual Exhibition",
  	date: "04/30/1908"
  },
  {
  	id: 208,
  	name: "Thirteenth Annual Exhibition",
  	date: "04/29/1909"
  },
  {
  	id: 209,
  	name: "Fourteenth Annual Exhibition",
  	date: "05/02/1910"
  },
  {
  	id: 210,
  	name: "Fifteenth Annual Exhibition",
  	date: "04/27/1911"
  },
  {
  	id: 211,
  	name: "Sixteenth Annual Exhibition",
  	date: "04/25/1912"
  },
  {
  	id: 212,
  	name: "Seventeenth Annual Exhibition",
  	date: "04/24/1913"
  },
  {
  	id: 230,
  	name: "Eighteenth Annual Exhibition",
  	date: "04/30/1914"
  },
  {
  	id: 231,
  	name: "Nineteenth Annual International Exhibition of Paintings",
  	date: "04/29/1920"
  },
  {
  	id: 232,
  	name: "Twentieth Annual International Exhibition of Paintings",
  	date: "04/28/1921"
  },
  {
  	id: 1822,
  	name: "Twenty-first Annual International Exhibition of Paintings",
  	date: "04/27/1922"
  },
  {
  	id: 234,
  	name: "Twenty-second Annual International Exhibition of Paintings",
  	date: "04/26/1923"
  },
  {
  	id: 235,
  	name: "Twenty-third Annual International Exhibition of Paintings",
  	date: "04/24/1924"
  },
  {
  	id: 236,
  	name: "Twenty-fourth Annual International Exhibition of Paintings",
  	date: "10/15/1925"
  },
  {
  	id: 237,
  	name: "Twenty-fifth Annual International Exhibition of Paintings",
  	date: "10/14/1926"
  },
  {
  	id: 238,
  	name: "Twenty-sixth Annual International Exhibition of Paintings",
  	date: "10/13/1927"
  },
  {
  	id: 239,
  	name: "Twenty-seventh Annual International Exhibition of Paintings",
  	date: "10/18/1928"
  },
  {
  	id: 168,
  	name: "Twenty-eighth Annual International Exhibition of Paintings",
  	date: "10/17/1929"
  },
  {
  	id: 240,
  	name: "Twenty-ninth Annual International Exhibition of Paintings",
  	date: "10/16/1930"
  },
  {
  	id: 241,
  	name: "Thirtieth Annual International Exhibition of Paintings",
  	date: "10/15/1931"
  },
  {
  	id: 242,
  	name: "Thirty-first Annual International Exhibition of Paintings",
  	date: "10/19/1933"
  },
  {
  	id: 243,
  	name: "1934 International Exhibition of Paintings",
  	date: "10/18/1934"
  },
  {
  	id: 244,
  	name: "1935 International Exhibition of Paintings",
  	date: "10/17/1935"
  },
  {
  	id: 249,
  	name: "1936 International Exhibition of Paintings",
  	date: "10/15/1936"
  },
  {
  	id: 250,
  	name: "1937 International Exhibition of Paintings",
  	date: "10/14/1937"
  },
  {
  	id: 255,
  	name: "1938 International Exhibition of Paintings",
  	date: "10/13/1938"
  },
  {
  	id: 256,
  	name: "1939 International Exhibition of Paintings",
  	date: "10/19/1939"
  },
  {
  	id: 257,
  	name: "Survey of American Painting",
  	date: "10/24/1940"
  },
  {
  	id: 258,
  	name: "Directions in American Painting",
  	date: "10/23/1941"
  },
  {
  	id: 259,
  	name: "Painting in the United States",
  	date: "10/14/1943"
  },
  {
  	id: 260,
  	name: "Painting in the United States",
  	date: "10/12/1944"
  },
  {
  	id: 261,
  	name: "Painting in the United States",
  	date: "10/11/1945"
  },
  {
  	id: 262,
  	name: "Painting in the United States",
  	date: "10/10/1946"
  },
  {
  	id: 263,
  	name: "Painting in the United States",
  	date: "10/09/1947"
  },
  {
  	id: 264,
  	name: "Painting in the United States",
  	date: "10/14/1948"
  },
  {
  	id: 265,
  	name: "Painting in the United States",
  	date: "10/13/1949"
  },
  {
  	id: 266,
  	name: "Pittsburgh International Exhibition of Paintings",
  	date: "10/19/1950"
  },
  {
  	id: 170,
  	name: "The 1952 Pittsburgh International Exhibition of Contemporary Paintings",
  	date: "10/16/1952"
  },
  {
  	id: 207,
  	name: "The 1955 Pittsburgh International Exhibition of Contemporary Painting",
  	date: "10/13/1955"
  },
  {
  	id: 169,
  	name: "The 1958 Pittsburgh Bicentennial International Exhibition of Contemporary Painting and Sculpture",
  	date: "12/05/1958"
  },
  {
  	id: 206,
  	name: "The 1961 Pittsburgh International Exhibition of Contemporary Painting and Sculpture",
  	date: "10/27/1961"
  },
  {
  	id: 166,
  	name: "The 1964 Pittsburgh International Exhibition of Contemporary Painting and Sculpture",
  	date: "10/30/1964"
  },
  {
  	id: 204,
  	name: "The 1967 Pittsburgh International Exhibition of Contemporary Painting and Sculpture",
  	date: "10/27/1967"
  },
  {
  	id: 205,
  	name: "1970 Pittsburgh International Exhibition of Contemporary Art",
  	date: "10/30/1970"
  },
  {
  	id: 203,
  	name: "Pittsburgh International Series: Pierre Alechinsky",
  	date: "10/28/1977"
  },
  {
  	id: 202,
  	name: "Pittsburgh International Series: Eduardo Chillida and Willem deKooning",
  	date: "10/26/1979"
  },
  {
  	id: 167,
  	name: "1982 Carnegie International",
  	date: "10/25/1982"
  },
  {
  	id: 201,
  	name: "1985 Carnegie International",
  	date: "11/09/1985"
  },
  {
  	id: 200,
  	name: "1988 Carnegie International",
  	date: "11/05/1988"
  },
  {
  	id: 48,
  	name: "Carnegie International 1991",
  	date: "10/19/1991"
  },
  {
  	id: 165,
  	name: "Carnegie International 1995",
  	date: "11/04/1995"
  },
  {
  	id: 41,
  	name: "1999 Carnegie International",
  	date: "11/06/1999"
  },
  {
  	id: 159,
  	name: "2004 Carnegie International",
  	date: "10/09/2004"
  },
  {
  	id: 1371,
  	name: "Life on Mars: 55th Carnegie International",
  	date: "05/03/2008"
  },
  {
  	id: 3718,
  	name: "2013 Carnegie International",
  	date: "10/04/2013"
  }
];

export default exhibition_dates;
