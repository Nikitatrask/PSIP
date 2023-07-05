function calculate() {
    var x = document.getElementById("x").value;
    if (x < 0) {
      var result = (5 * (1 / 2 * x));   
      document.getElementById("result").value = result;
    }
    else {
      var result = Math.pow(x, 2);
      document.getElementById("result").value = result;
    }
    return;
}

function process() {
    const S1 = "Я программирую";
    const S2 = "Я - будущий программист";
    
    const lengthS1 = S1.length;
    const remove = S2.replace("Я", "");
    const replace = S2.replace(/и/g, "*");

    document.getElementById("S1").value = S1;
    document.getElementById("S2").value = S2;
    document.getElementById("length").value = lengthS1;
    document.getElementById("remove").value = remove;
    document.getElementById("replace").value = replace;
  }