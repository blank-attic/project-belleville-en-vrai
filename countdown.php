<div id="compte_a_rebours"></div>
<script type="text/JavaScript">
var Affiche=document.getElementById("compte_a_rebours");
function Rebour() {
var date1 = new Date();
var date2 = new Date ("May 19 19:00:00 2008");
var sec = (date2 - date1) / 1000;
var n = 24 * 3600;
if (sec > 0) {
j = Math.floor (sec / n);
h = Math.floor ((sec - (j * n)) / 3600);
mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
Affiche.innerHTML = "BELLEVILLE EN VRAI débute dans : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";
window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";
}
tRebour=setTimeout ("Rebour();", 1000);
}
Rebour();
</script>
