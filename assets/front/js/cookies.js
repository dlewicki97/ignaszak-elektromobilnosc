window.addEventListener("load", function(){
  const xhr = new XMLHttpRequest();

  xhr.onload = function(){
    if(this.status === 200){
      var res = JSON.parse(this.responseText);
      
      window.cookieconsent.initialise({
        "palette": {
          "popup": {
            "background": "var(--first-color)",
            "text": "#fff"
          },
          "button": {
            "background": `${res.first_color}`,
            "text": "#fff"
          }
        },
        "type": "opt-out",
        "content": {
          "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
          "dismiss": "Rozumiem",
          "deny": "",
          "allow": "Rozumiem",
          "link": "Czytaj więcej...",
          "href": `uploads/${res.privace}`
        }
      })
      
    }
  }
  
  

  let baseUrl = window.location.origin;
  if(window.location.host === 'localhost') baseUrl = window.location.origin + '/ignaszak-el';

  xhr.open('GET',`${baseUrl}/api/settings/get` ,false);
  xhr.send();
});