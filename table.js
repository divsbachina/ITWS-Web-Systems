const container = document.getElementById("container");
const buttonContainer = document.getElementById("buttonContainer");

const table = container.getElementsByTagName("table")[0];
const thead = table.getElementsByTagName("thead")[0];
const tbody = table.getElementsByTagName("tbody")[0];

// Loop through items in JSON data..
json.forEach(function(item) {
  const button = document.createElement("button");

  button.innerHTML = item.host;

  button.onclick = () => {
    tbody.innerHTML = '<tr><td>' + item.host + '</td>' + '<td>' + item.name + '</td>' + '<td>' + item.id + '</td></tr>' +
      '<tr><td>' + item.host + '</td>' + '<td>' + item.name + '</td>' + '<td>' + item.id + '</td></tr>' +
      '<tr><td>' + item.host + '</td>' + '<td>' + item.name + '</td>' + '<td>' + item.id + '</td></tr>';

    table.style.display = "table";
  }

  buttonContainer.append(button);

});