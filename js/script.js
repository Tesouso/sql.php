var exibe = document.getElementById("exibe")

if(document.cookie.indexOf(['atualizado'])>=0){
    exibe.innerHTML = "Atualizado com sucesso!!!"
    exibe.style.backgroundColor = "orange"
    exibe.style.color = "white"
    exibe.style.textAlign = "center"
    exibe.className = "show"
    setTimeout (()=>{
        exibe.style.display = 'none'
    }, 3000)

    document.cookie = "atualizado=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/bryan_PHP/slq.php"
}

var exibe = document.getElementById("exibe")

if(document.cookie.indexOf(['deletado'])>=0){
    exibe.innerHTML = "Deletado com sucesso!!!"
    exibe.style.backgroundColor = "red"
    exibe.style.color = "white"
    exibe.style.textAlign = "center"
    exibe.className = "show"
    setTimeout (()=>{
        exibe.style.display = 'none'
    }, 3000)

    document.cookie = "deletado=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/bryan_PHP/slq.php"
}

var exibe = document.getElementById("exibe")

if(document.cookie.indexOf(['adicionado'])>=0){
    exibe.innerHTML = "Adicionado com sucesso!!!"
    exibe.style.backgroundColor = "green"
    exibe.style.color = "white"
    exibe.style.textAlign = "center"
    exibe.className = "show"
    setTimeout (()=>{
        exibe.style.display = 'none'
    }, 3000)

    document.cookie = "adicionado=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/bryan_PHP/slq.php"
}