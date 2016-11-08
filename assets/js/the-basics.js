  var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var states = ['Batista', 'IEQ - Igreja do Evangelho Quadrangular', 'Adventista', 'Assembléia de Deus', 'Renascer em Cristo',
  'Universal do Reino de Deus', 'Comunidades evangelicas', 'Independente', 'O Brasil para Cristo', 'Congregação Cristã no Brasil', 'Metodista',
  'Pentecostal', 'Deus é Amor', 'Católica', 'Presbiteriana', 'Luterana', 'Mundial do Poder de Deus', 'Anglicana',
  'Resgate', 'Sara Nossa Terra', 'Vitória em Cristo', 'Fonte da Vida', 'Apostólica',
  'Biblica', 'Comunidade bíblica', 'Comunidade Católica', 'Comunidade Cristã', 'Metodista Wesleyana', 'Videira',
  'Verbo da Vida', 'Voz da Verdade', 'Evangélica', 'Comunidade Paz e vida', 'Familia de Deus',
  'ICM - Igrejas da Comunidade Metropolitana', 'Adventista da Promessa', 'Igreja Cristã Nova Vida', 'Batista Nacional', 'Batista Biblica',
  'Plenitude do Trono de Deus', 'Igreja Nova Vida', 'Igreja Cristã Evangelica', 'ADVC - Ass.Vitoria em Cristo', 'Igreja do Nazareno', 'Messiânica',
  'Bola de Neve', 'do Nazareno'
];

$('#the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1,
  background: 'white'
  
},
{
  name: 'states',
  source: substringMatcher(states)
});


