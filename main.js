document.querySelector('input[name="done_box').addEventListener('checked', function() {
    var d = document.querySelector('table.test');
    if (this.checked) {
        d.style.opacity = 0.5;
    } else {
        d.style.opacity = 1;
    }
});


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}


const checkbox = document.getElementById('animation-checkbox');

checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        document.querySelector('.container').classList.add('reduce-motion')
    } else {
        document.querySelector('.container').classList.remove('reduce-motion')
    }
})