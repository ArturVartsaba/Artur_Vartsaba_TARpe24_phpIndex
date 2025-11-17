<?php
echo "<h2>GIT CMD käsurida</h2>";
echo "<ol>";
?>

<li>
    <pre>
    //uus repo
    git init
    </pre>
</li>

<li>
    <pre>
    git config --global user.name "Artur Vartsaba"

    git config --global user.email "arturvartsaba1@gmail.com"

    git config --global --list
    </pre>
</li>

<li>
    <pre>
    //ssh võti loomine

    ssh-keygen -o -t rsa -C "arutvartsaba1@gmail.com"

    //võti salvestatakse opilane/.ssh kausta

    //id_rsa.pub tuleb kopeerida oma github -reposse
    </pre>
</li>

<li>
    <pre>
    git add .

    git commit -a -m "on loodud phpIndex"

    git remote remove origin
    </pre>
</li>

<li>
    <pre>
    git remote add origin git@github.com:ArturVartsaba/Artur_Vartsaba_TARpe24_phpIndex.git

    git branch -M main

    git push -u origin main
    </pre>
</li>