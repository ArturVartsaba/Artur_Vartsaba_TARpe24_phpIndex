<h1>Muusika küsitlus</h1>

<form action="">

    <fieldset>
        <legend>Milliseid muusikuid/ansambleid sa tead?</legend>
        <input type="checkbox" name="ansambel" id="abba" value="ABBA" onchange="valiAnsambel()">
        <label for="abba">ABBA</label>
        <br>
        <input type="checkbox" name="ansambel" id="the" value="The Beatles" onchange="valiAnsambel()">
        <label for="the">The Beatles</label>
        <br>
        <input type="checkbox" name="ansambel" id="system" value="System of Down" onchange="valiAnsambel()">
        <label for="system">System of Down</label>
        <br>
        <input type="checkbox" name="ansambel" id="dogs" value="Zhadan And The Dogs" onchange="valiAnsambel()">
        <label for="dogs">Zhadan And The Dogs</label>
        <br>
        <div id="vastus"></div>
    </fieldset>

    <fieldset>
        <legend>Mida arvad muusika kuulamisest koolis?</legend>
        <textarea id="arvamus" onchange="kirjutaArvamus()"></textarea>
        <div id="arvamusVastus"></div>
    </fieldset>

    <fieldset>
        <legend>Mitu tundi päevas sa kuulad muusikat?</legend>
        <input type="number" id="tundi" onchange="kirjutaTunnid()">
        <div id="tundiVastus"></div>
    </fieldset>

    <fieldset>
        <legend>Kas sa kuulad raadiot?</legend>
        <input type="radio" id="jah" name="raadio" onchange="valiRaadioKuulamine()">
        <label for="jah">jah</label>
        <br>
        <input type="radio" id="ei" name="raadio" onchange="valiRaadioKuulamine()">
        <label for="ei">ei</label>
        <div id="raadioVastus"></div>
    </fieldset>

    <fieldset>
        <legend>Milliseid raadiojaamu oskad nimetada?</legend>
        <input type="text">
    </fieldset>

    <fieldset>
        <legend>Millist muusikat sa kõige rohkem kuulad?</legend>
        <select name="stiil" id="stiil">
            <option value="vali">vali vastus...</option>
            <option value="pop">pop</option>
            <option value="rock">rock</option>
            <option value="jazz">jazz</option>
            <option value="hiphop">hip-hop</option>
            <option value="rap">rap</option>
            <option value="classic">klassikaline</option>
        </select>
    </fieldset>

    <button id="saada">Saada</button>
    <button id="puhasta">Puhasta</button>

</form>
