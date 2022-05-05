<?php
session_start();
// get session data
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>

<form method="post" action="specialty.php">
    <label for="valik_erialadest">Milline eriala sinu jaoks oluline?</label><br>
    <input type="checkbox" name="CNC_operaator">CNC operaator </input>
    <input type="checkbox" name="Koostelukksepp">Koostelukksepp</input>
    <input type="checkbox" name="Keevitaja">Keevitaja</input>
    <br>
    <label for="muu_eriala">Muu eriala:</label><br>
    <input type="text" id="muu_eriala" name="Muu_eriala"><br>
    <input type="submit" value="Sisesta">
</form>

<br>
<br>

<form method="post" action="company.php">
    <label for="ettevotte_nimi">Ettevõtte nimi</label><br>
    <input type="text" name="ettevotte_nimi"><br>

    <label for="inimeste_vastuvotmine">Kes tegeleb Sinu ettevõttes uute inimeste, sh praktikantide vastuvõtmisega?</label><br>
    <input type="text" name="inimeste_vastuvotmine"><br>

    <label for="voimekus_juhendamisel">Milline on Sinu ettevõtte võimekus ja kogemus praktikantide personaalsel juhendamisel?</label><br>
    <input type="text" name="voimekus_juhendamisel"><br>

    <label for="votad_opilane_toole">Kas Sinu ettevõte on valmis lepinguga tööle võtma noore, kes samal ajal õpib kutsekoolis vajalikku eriala?</label><br>
    <input type="text" name="votad_opilane_toole"><br>

    <label for="osalema_pilootprogrammis">Kas Sinu ettevõte oleks huvitatud osalema 2022/23 õppeaasta profiõppe pilootprogrammis?</label><br>
    <input type="text" name="osalema_pilootprogrammis"><br>

    <label for="mitu_korraga_votad">Mitu noort on Sinu ettevõte korraga võimeline ja valmis vastu võtma?</label><br>
    <input type="text" name="mitu_korraga_votad"><br>

    <label for="kysimused">Tekkis küsimusi? Tahaks midagi täpsustada? Kirjuta siia!</label><br>
    <input type="text" name="kysimused"><br>

    <label for="personaalne_yhendus">Jäta meile oma e-mail kui soovid, et võtaksime Sinuga personaalselt ühendust!</label><br>
    <input type="text" name="personaalne_yhendus"><br>

    <input type="submit" value="Saada">
</form>
