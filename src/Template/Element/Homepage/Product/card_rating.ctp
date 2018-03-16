<ul class="rating">
    <?php for($i = 1; $i <= $star; $i++): ?>
        <li class="filled">
            <!-- SVG STAR -->
            <svg class="svg-star">
                <use xlink:href="#svg-star"></use>
            </svg>
            <!-- /SVG STAR -->
        </li>
    <?php endfor; ?>
    <?php for($i = 1; $i <= (5-$star); $i++): ?>
        <li>
            <!-- SVG STAR -->
            <svg class="svg-star">
                <use xlink:href="#svg-star"></use>
            </svg>
            <!-- /SVG STAR -->
        </li>
    <?php endfor; ?>   
</ul>
