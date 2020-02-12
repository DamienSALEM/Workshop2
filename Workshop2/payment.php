<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RESERVATION</title>
   
</head>


<body>
    <section>
        <h2>RESERVATION</h2>
        <form method="post" action="paie.html">carte bancaire : <input id="jl" type="text" name="carte" size="16"
                maxlength="16" required /><br><br>code de sécurité : <input id="jl" type="text" name="cvc" size="3"
                maxlength="3" required /><br><br>Date d'expiration(mois/année) : <select id="jl" name="mois">
                <option value="Décembre">12</option>
                <option value="Novembre">11</option>
                <option value="Octobre">10</option>
                <option value="Septembre">09</option>
                <option value="Août">08</option>
                <option value="Juillet">07</option>
                <option value="Juin">06</option>
                <option value="Mai">05</option>
                <option value="Avril">04</option>
                <option value="Mars">03</option>
                <option value="Février">02</option>
                <option value="Janvier">01</option>
               
            </select><select id="jl" name="année">
                <option value="victor">2025</option>
                <option value="victor">2024</option>
                <option value="victor">2023</option>
                <option value="wetshi">2022</option>
                <option value="umena">2021</option>
                <option value="umena">2020</option>
                <option value="umena" aria-required="false">2019</option>
            </select><br><br>Type de carte bancaire : <select id="jl" name="CB">
                <option value="Mastercard">Mastercard</option>
                <option value="Visa">Visa</option>
                <option value="Standard">Standard</option>
                <option value="CQTV">Ce que tu veut</option>
            </select><br><br><input id="jl" type="submit" name="envoi" value="payer" /></div>
        </form>
        <div id="source">
                <header><img src="maestrovisa.jpg" alt="type_de_caret" title="modèle"></header>
            </div>
    </section>
</body>

</html>