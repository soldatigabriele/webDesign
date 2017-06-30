    $(function () {
        $('#ri-grid').gridrotator({
            rows: 3,
            columns: 6,
            animSpeed: 500,
            animType: 'rotateBottom',
            w1024: {
                rows: 3,
                columns: 6
            },
            w768: {
                rows: 3,
                columns: 6
            },
            w480: {
                rows: 3,
                columns: 5
            },
            w320: {
                rows: 2,
                columns: 4
            },
            w240: {
                rows: 2,
                columns: 3
            },
            preventClick: true,
            animEasingOut: 'linear',
            animEasingIn: 'linear',
            slideshow: false,
            onhover: true
        });

    });
