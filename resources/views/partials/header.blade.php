<div class="container">
    <header class="d-flex justify-content-between">
        <img class="my-3" src="/public/img/dc-logo.png" alt="dc-logo">
        <nav class="d-flex align-items-center">
            <ul class="nav">
                <li class="nav-item" v-for="element in listItems">
                    <a class="nav-link" href="#"><strong>{{element}}</strong></a>
                </li>
            </ul>
        </nav>
    </header>
</div>
<img class="jumbo" src="./assets/jumbotron.jpg" alt="">


return {
    listItems: ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"],                 
}

<style lang="scss" scoped>
    img {
        aspect-ratio: 1/1;
        height: 80px;
    }

    a {
        font-size: 0.7rem;
        color: #000000;
    }

    .jumbo {
    height: 400px;
    width: 100%;
    margin-bottom: -150px; 
  }
</style>