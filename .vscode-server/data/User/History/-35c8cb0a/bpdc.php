<meta charset="UTF-8">

<h2>Uusi leffa</h2>
<form method=post action=lisays.php>
Leffa:
<br><textarea rows=1 cols=55 name=elo></textarea><br><br>
Ohjaaja:
<br><textarea rows=1 cols=55 name=ohj></textarea><br><br>
Genre:
<br><textarea rows=1 cols=55 name=gen></textarea><br><br>
Vuosi:
<br><textarea rows=1 cols=10 name=vuo></textarea><br><br>
Miespääosa:
<br><textarea rows=1 cols=55 name=mies></textarea><br><br>
Naispääosa:
<br><textarea rows=1 cols=55 name=nais></textarea><br><br>
<input type=submit value='Lisää'>
<br><br>
</form>

<h2>Hae leffa nimellä</h2>
<form method=POST action=nimihaku.php>
Leffa:
<br><textarea rows=1 cols=55 name=elonimi></textarea><br><br>
<input type=submit value='Hae'>

<h2>Hae leffa id-tunnisteella</h2>
<form method=get action=idhaku.php>
Leffa:
<br><textarea rows=1 cols=55 name=leffa></textarea><br><br>
<input type=submit value='Hae'>

</body></html>