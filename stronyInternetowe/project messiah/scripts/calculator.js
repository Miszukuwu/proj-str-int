function calculateResult() {
    const form = document.getElementById('gameForm');
    const q1 = form.q1.value;
    const q2 = form.q2.value;
    const resultDiv = document.getElementById('result');

    if (!q1 || !q2) {
        alert('Proszę odpowiedzieć na wszystkie pytania.');
        return;
    }

    let game = "";

    // Match results based on answers
    if (q1 === 'A' && q2 === 'A') {
        game = "Wiedźmin 3: Dziki Gon";
    } else if (q1 === 'A' && q2 === 'B') {
        game = "Cyberpunk 2077";
    } else if (q1 === 'A' && q2 === 'C') {
        game = "Assassin's Creed Odyssey";
    } else if (q1 === 'A' && q2 === 'D') {
        game = "S.T.A.L.K.E.R.: Cień Czarnobyla";
    } else if (q1 === 'B' && q2 === 'A') {
        game = "Dark Souls III";
    } else if (q1 === 'B' && q2 === 'B') {
        game = "Mass Effect Legendary Edition";
    } else if (q1 === 'B' && q2 === 'C') {
        game = "Red Dead Redemption 2";
    } else if (q1 === 'B' && q2 === 'D') {
        game = "The Last of Us";
    } else if (q1 === 'C' && q2 === 'A') {
        game = "Monster Hunter: World";
    } else if (q1 === 'C' && q2 === 'B') {
        game = "DOOM Eternal";
    } else if (q1 === 'C' && q2 === 'C') {
        game = "Escape From Tarkov";
    } else if (q1 === 'C' && q2 === 'D') {
        game = "Fortnite";
    } else if (q1 === 'D' && q2 === 'A') {
        game = "Minecraft";
    } else if (q1 === 'D' && q2 === 'B') {
        game = "No Man's Sky";
    } else if (q1 === 'D' && q2 === 'C') {
        game = "Planet Zoo";
    } else if (q1 === 'D' && q2 === 'D') {
        game = "Fallout 4";
    } else {
        resultDiv.innerHTML = `<h2>Nie znaleźliśmy idealnej gry :(</h2><p>Spróbuj ponownie zmieniając odpowiedzi!</p>`;
        resultDiv.style.display = 'block';
        return;
    }

    resultDiv.innerHTML = `<h2>Twoja gra to "${game}"</h2><p>Sprawdź tę grę i baw się dobrze!</p>`;
    resultDiv.style.display = 'block';
}