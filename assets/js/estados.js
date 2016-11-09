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

var states =     ['','Selecione um estado','AC','Acre','AL','Alagoas','AM','Amazonas','AP','Amapá','BA','Bahia',
    'CE','Ceará','DF','Distrito Federal','ES','Espírito Santo','GO','Goiás','MA','Maranhão','MG','Minas Gerais',
    'MS','Mato Grosso do Sul','MT','Mato Grosso','PA','Pará','PB','Paraíba','PE','Pernambuco','PI','Piauí',
    'PR','Paraná','RJ','Rio de Janeiro','RN','Rio Grande do Norte','RO','Rondônia','RR','Roraima','RS','Rio Grande do Sul',
    'SC','Santa Catarina','SP','São Paulo','SE','Sergipe','TO','Tocantins'
];

$('#estados .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1,
  background: 'white'
  
},
{
  name: 'states',
  source: substringMatcher(states)
});




