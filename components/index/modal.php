
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script>
var modal = document.getElementById('myModal');
var modalImg = document.getElementById('img01');
var span = document.getElementsByClassName('close')[0];

span.onclick = function() { 
    modal.style.display = "none";
}

function openModal(src) {
    modal.style.display = "block";
    modalImg.src = src;
}
</script>