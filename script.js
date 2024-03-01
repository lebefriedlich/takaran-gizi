document.getElementById("gender").addEventListener("change", function () {
  var gender = this.value;
  var hamilOrMenyusuiDiv = document.getElementById("hamilOrMenyusui");
  var umurHamilDiv = document.getElementById("umurHamilOrMenyusui");

  if (gender === "laki-laki") {
    document.getElementById("submitButton").classList.remove("hidden");
    hamilOrMenyusuiDiv.innerHTML = "";
    umurHamilDiv.innerHTML = "";
  } else if (gender === "perempuan") {
    submitButton.classList.add("hidden");
    hamilOrMenyusuiDiv.innerHTML = `
  <label class="mt-3">Hamil atau Menyusui?</label>
  <select class="form-control mt-2" id="hamilMenyusui" required>
    <option value="">Pilih</option>
    <option value="hamil">Hamil</option>
    <option value="menyusui">Menyusui</option>
    <option value="tidak">Tidak keduanya</option>
  </select>
`;
  }
});

document
  .getElementById("hamilOrMenyusui")
  .addEventListener("change", function () {
    var hamilMenyusui = document.getElementById("hamilMenyusui").value;
    var submitButton = document.getElementById("submitButton");

    if (hamilMenyusui === "tidak") {
      submitButton.classList.remove("hidden");
    } else {
      var umurText = hamilMenyusui === "hamil" ? "Umur Hamil" : "Umur Menyusui";
      document.getElementById("umurHamilOrMenyusui").innerHTML = `
  <label class="mt-3">${umurText}:</label>
  <input type="number" class="form-control mt-1" id="umurHamil" required>
`;
    }
    document.getElementById("umurHamil").addEventListener("input", function () {
      var umur = document.getElementById("umurHamil");
      var submitButton = document.getElementById("submitButton");

      if (umur && umur.value.trim() === "") {
      } else {
        submitButton.classList.remove("hidden");
      }
    });
  });
