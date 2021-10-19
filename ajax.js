var url='https://api.frankfurter.app/latest';
myBtn.addEventListener('click', function(){
  let XHR = new XMLHttpRequest();
  XHR.open('GET', url, true)
  XHR.setRequestHeader('Access-Control-Allow-Origin','*');
  XHR.onload = function() {
        if (this.status === 200)  {
            console.log(JSON.parse(this.responseText));
        }
    }
    XHR.send();
});

