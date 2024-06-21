<style>
    :root {
        color-scheme: light dark;
        padding: 0;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
        justify-content: center;
        place-items: center;
        place-content: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    img {
        border-radius: 16px;
    }

    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .first-page {
        display: flex;
        flex-direction: column;
        min-height: 31vh;
        padding: 0;
        padding-top: 31vh;
        margin: 0;
        align-items: center;
        justify-content: space-around;
    }

    .first-page-info {
        display: flex;
        min-height: 31vh;
        min-width: 90vw;
        flex-direction: column;
        gap: 1px;
        align-items: center;
        justify-content: center;
        padding-bottom: 40vh;
    }

    .divisor {
        width: 99%;
        height: 1px;
        border-radius: 999px;
        margin-top: 2rem;
        margin-bottom: 2rem;
        background: #666;
    }

    .product {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        gap: 0;
        width: 100%;
        border: 2px solid #444;
        padding: 2rem;
        border-radius: 12px;
        min-height: 300px;
        min-width: 300px;
    }

    .products_list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        align-items: center;
        place-items: center;
        justify-content: center;
        padding-left: 2rem;
        padding-right: 2rem;
        gap: 12px;
        width: 100%;
    }
</style>