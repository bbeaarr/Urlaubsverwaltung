$( document ).ready(function() {
    $.ajax({
      method: 'GET',
      url: '/getAllEntries'
  }).done(function(data) {
      console.log(data);
      var tageCount = 0;
      for (var i = 0; i < data.length; i++) {
          var entry = data[i];
          tageCount += entry.anzahlTage;
      }
      $('#rest').append(30 - tageCount);
    });
});
