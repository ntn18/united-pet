<style>
    .blog-box h4{
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .blog-box p{
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
    }

    .paging {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: .25rem;
    }
    .paging a {
        transition: all 0.2s ease-in-out;
        font-family: 'Montserrat', sans-serif;
        color: #fff;
        font-weight: 700;
        border: 1px solid #fff;
        background-color: #1446A0;
        padding: .5rem .75rem;
    }

    .paging strong {
        color: #fff;
        border: 1px solid #fff;
        outline: 0;
        padding: .5rem .75rem;
        font-family: 'Montserrat', sans-serif;
        background-color: #018AE0;
    }

    .paging a:hover {
        background-color: #018AE0;
    }
</style>