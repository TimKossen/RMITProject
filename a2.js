function myFunction() {
  var x = document.getElementById("moblinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}


        var count = 0;
         var countEl = document.getElementById("count");
    function plus(){
        var countEl = document.getElementById("count");
        count++;
        countEl.value = count;
        var x = count * 250
        var save = x * 0.10
         document.getElementById("payval").innerHTML = x.toFixed(2);
         document.getElementById("kgval").innerHTML = count;
         document.getElementById("saveval").innerHTML = save.toFixed(2);
          if (count > 8) {
              alert("If you would like a larger order please email support@kavalicious.com");
              count = 9;
          }
    }

    function minus(){
      var countEl = document.getElementById("count");
      if (count > 1) {
        count--;
        countEl.value = count;
        var x = count * 250
        var save = x * 0.10
         document.getElementById("payval").innerHTML = x.toFixed(2);
         document.getElementById("kgval").innerHTML = count;
         document.getElementById("saveval").innerHTML = save.toFixed(2);

      }



    }