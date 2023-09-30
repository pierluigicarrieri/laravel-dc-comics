<footer class="flex-grow-1 d-flex flex-column">
    <div class="footer-top flex-grow-1">
        <div class="container d-flex justify-content-between">
            <div class="footer-left d-flex py-3">
                <ul class="nav d-flex flex-column px-2">
                    <li class="nav-item title"><strong>{{topFooterItems[0].title}}</strong></li>
                    <li class="nav-item" v-for="element in topFooterItems[0].items">
                        <a href="#">{{element}}</a>
                    </li>
                    <li class="nav-item title mt-4"><strong>{{topFooterItems[1].title}}</strong></li>
                    <li class="nav-item" v-for="element in topFooterItems[1].items">
                        <a href="#">{{element}}</a>
                    </li>
                </ul>
                <ul class="nav d-flex flex-column px-2">
                    <li class="nav-item title"><strong>{{topFooterItems[2].title}}</strong></li>
                    <li class="nav-item" v-for="element in topFooterItems[2].items">
                        <a href="#">{{element}}</a>
                    </li>
                </ul>
                <ul class="nav d-flex flex-column px-2">
                    <li class="nav-item title"><strong>{{topFooterItems[3].title}}</strong></li>
                    <li class="nav-item" v-for="element in topFooterItems[3].items">
                        <a href="#">{{element}}</a>
                    </li>
                </ul>
            </div>
            <div class="footer-right">
                <img v-bind:src="`/public/img/` + images.logo" alt="">
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <button class="btn btn-outline-primary text-white">SIGN-UP NOW!</button>
            <div class="d-flex align-items-center">
                <div class="text-primary"><strong>FOLLOW US</strong></div>
                    <ul class="d-flex m-auto">
                        <li class="px-2" v-for="element in bottomFooterItems">
                            <a href="#">
                                <img v-bind:src="`/public/img/` + element" alt="">
                            </a>  
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</footer>




return {
    images: {
        backgroundImage: "footer-bg.jpg",
        logo: "dc-logo-bg.png"
    },
    topFooterItems: [
        {
            title: "DC COMICS",
            items: ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"]
        },
        {
            title: "SHOP",
            items: ["Shop DC", "Shop DC Collectibles"]
        },
        {
            title: "DC",
            items: ["Terms of use", "Privacy policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"]
        },
        {
            title: "SITES",
            items: ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
        },
    ],
    bottomFooterItems: ["footer-facebook.png", "footer-twitter.png", "footer-youtube.png", "footer-pinterest.png", "footer-periscope.png"]
}
}
}






<style lang="scss" scoped>

    .footer-top {
        background-image: url("/public/img/footer-bg.jpg");
    }
    .footer-left > ul {
        font-size: 0.7rem;
    }

    a {
        color: #878787;
        text-decoration: none;
    }

    li {
        padding-top: 0.5rem;
    }
    .title {
        color: #FFFFFF;
        font-size: 0.8rem;
        margin-bottom: 1rem;
    }
    .footer-right > img {
        height: 550px;
        margin-top: -65px;
        margin-bottom: -65px;
    }
    .footer-bottom {
        background-color: #303030;
    }

</style>