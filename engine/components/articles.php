<div class="articles-and-cites-grid">
    <div class="titled-container">
        <div class="title">your title here</div>
        <article class="round-picture-article">
            <img src="img/articles/coin.png" alt="Альтернативный флаг">
            <h3>Lorem ipsum dolor</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum,
                tempora.Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Harum, tempora.
            </p>
            <a href="#" class="link-with-arrows">Read More</a>
        </article>
    </div>

    <div class="titled-container">
        <div class="title">your title here</div>
        <article class="article-with-symbol">
            <img src="img/quote-left.png" alt="Символ цитирования">
            <h3>Tommy Tanker - CEO</h3>
            <a href="#" class="link-with-arrows">View This Project</a>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure,
                rem! Tenetur debitis laborum, soluta corrupti explicabo, quos et
                architecto dicta necessitatibus nostrum consequuntur velit
                repudiandae autem dolorum beatae perferendis saepe!
            </p>
        </article>
    </div>
    <div class="titled-container">
        <div class="title">your title here</div>
        <article class="round-picture-article">
            <img src="img/articles/horse.jpeg" alt="Альтернативный флаг">
            <h3>Lorem ipsum dolor</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum,
                tempora.Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Harum, tempora.
            </p>
            <a href="#" class="link-with-arrows">Read More</a>
        </article>
    </div>
    <div class="titled-container">
        <div class="title">your title here</div>
        <article class="round-picture-article">
            <img src="img/articles/XXL.jpg" alt="Альтернативный флаг">
            <h3>Lorem ipsum dolor</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum,
                tempora.Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Harum, tempora.
            </p>
            <a href="#" class="link-with-arrows">Read More</a>
        </article>
    </div>

</div>

<style>
    .articles-and-cites-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        grid-gap: 25px;
        margin-bottom: 25px;
    }

    @media (min-width: 867px) and (max-width: 896px) {
        .articles-and-cites-grid {
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 107px;
            grid-column-gap: 15px;
        }
    }

    @media (min-width: 475px) and (max-width: 866px) {
        .articles-and-cites-grid {
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 210px;
            grid-column-gap: 15px;
        }
    }

    @media (max-width: 474px) {
        .articles-and-cites-grid {
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            grid-column-gap: 15px;
        }
    }

    .round-picture-article img {
        margin: 0 25px 0 0;
        float: left;
        width: 128px;
        height: 128px;
        border-radius: 64px;
    }

    .round-picture-article h3 {
        font-size: 16px;
        color: #333333;
        line-height: 1.2;
        text-align: left;
    }

    .round-picture-article p {
        font-size: 13px;
        color: #999999;
        line-height: 1.4;
        text-align: left;
    }

    .link-with-arrows {
        font-size: 13px;
        color: #97455f;
        line-height: 1;
        text-align: left;
        text-decoration: none;
    }

    .link-with-arrows:after {
        content: "...";
    }

    .link-with-arrows:hover {
        color: #ee802f;
        font-weight: 700;
    }

    .link-with-arrows:hover:after {
        content: ">>";
    }

    .article-with-symbol img {
        float: left;
        margin: 0 12px 12px 0;
    }

    .article-with-symbol h3 {
        font-size: 16px;
        color: #333333;
        line-height: 1.2;
        text-align: left;
    }

    .article-with-symbol p {
        display: block;
        float: left;
        color: gray;
        font-family: "Times New Roman", Times, sans-serif;
        font-size: 13px;
    }

    .article-with-symbol p::before {
        content: "";
        display: block;
        clear: both;
    }
</style>