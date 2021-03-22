function createmeal() {
        var txtNewSelectBox = document.createElement('div');
        txtNewSelectBox.innerHTML = "<label for='meal'>Meal:</label><select name='meal'id='meal'><option>Breakfast</option><option>Lunch</option><option>Dinner</option><option>Snack</option><option>Refreshment</option><option>Cocktail</option></select>";
        document.getElementById("newElementId").appendChild(txtNewSelectBox);
        }