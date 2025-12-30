// Sample vendor library
var SampleLibrary = {
  init: function() {
    console.log('Sample Library initialized');
  }
};

// Another sample vendor library
var SampleLibrary2 = {
  version: '1.0.0',
  doSomething: function() {
    console.log('Sample Library 2 doing something');
  }
};

// Main scripts file
document.addEventListener('DOMContentLoaded', function() {
  console.log('Main scripts loaded');
});
