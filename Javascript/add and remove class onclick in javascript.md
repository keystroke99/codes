# Add a class on the selected element and remove form others

```
HTML CODE
<ul class="menuone">
                                                    <li class="boxesclick" rel="100006" rel2="6 CHOCOLATES" rel3="15">
                                <div class="image-block">
                                    <img src="http://localhost/ninaschocolates/attachments/shop_images/08_6pc-open-assorted-ballotin-_2__11.jpg" alt="product" title="product">
                                </div>
                                <div class="description-block">
                                    <p class="prod-name">
                                        6 CHOCOLATES                                            <span>
									<strong> $ 15</strong>
								</span>
                                    </p>
                                    <p class="prod_cost zerop cenP"></p>
                                </div>
                            </li>
                                                        <li class="boxesclick" rel="100007" rel2="12 CHOCOLATES" rel3="25">
                                <div class="image-block">
                                    <img src="http://localhost/ninaschocolates/attachments/shop_images/09_12pc-open-assorted-ballotin-box-_2_2.jpg" alt="product" title="product">
                                </div>
                                <div class="description-block">
                                    <p class="prod-name">
                                        12 CHOCOLATES                                            <span>
									<strong> $ 25</strong>
								</span>
                                    </p>
                                    <p class="prod_cost zerop cenP"></p>
                                </div>
                            </li>
                                                        <li class="boxesclick" rel="100008" rel2="20 CHOCOLATE" rel3="40">
                                <div class="image-block">
                                    <img src="http://localhost/ninaschocolates/attachments/shop_images/10_20pc-open-assorted-ballotin-box2.jpg" alt="product" title="product">
                                </div>
                                <div class="description-block">
                                    <p class="prod-name">
                                        20 CHOCOLATE                                            <span>
									<strong> $ 40</strong>
								</span>
                                    </p>
                                    <p class="prod_cost zerop cenP"></p>
                                </div>
                            </li>
                                                        <li class="boxesclick" rel="100009" rel2="26 CHOCOLATE" rel3="50">
                                <div class="image-block active">
                                    <img src="http://localhost/ninaschocolates/attachments/shop_images/13_26pc-open-assorted-ballotin-box-_2__12.jpg" alt="product" title="product">
                                </div>
                                <div class="description-block">
                                    <p class="prod-name">
                                        26 CHOCOLATE                                            <span>
									<strong> $ 50</strong>
								</span>
                                    </p>
                                    <p class="prod_cost zerop cenP"></p>
                                </div>
                            </li>
                                                </ul>

JQUERY Script

$('ul.menuone div.image-block').click(function () {
    $('ul.menuone div.image-block').each(function () {
        $(this).removeClass('active');
    });
    $(this).addClass('active');
```
