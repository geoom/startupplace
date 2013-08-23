(function() {
  
  if (typeof window.RedactorPlugins === 'undefined') window.RedactorPlugins = {};
   
  window.RedactorPlugins.spellchecker = {
    init: function() {
      
      this.addBtn('spellchecker', 'Spellchecker', function(obj) {
        obj.toggle();
      });
    },
    create: function() {

      this.spellchecker = new $.SpellChecker(this.$editor, {
        lang: 'en',
        parser: 'html',
        webservice: {
          path: "vendor/SpellChecker.php",
          driver: 'pspell'
        },
        suggestBox: {
          position: 'below'
        }
      });

      // Bind spellchecker handler functions
      this.spellchecker.on('check.success', function() {
        alert('There are no incorrectly spelt words.');
      });
    },
    toggle: function() {
      if (!this.spellchecker) {
        this.setBtnActive('spellchecker');
        this.create();
        this.spellchecker.check();
      } else {
        this.setBtnInactive('spellchecker');
        this.spellchecker.destroy();
        this.spellchecker = null;
      }
    }
  };
  
  // Init redactor
  $('.textarea').redactor({ 
    plugins: ['spellchecker']
  });

})();