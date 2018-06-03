<section id="blog" class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="overflow-hidden">
                    <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp">TIN TỨC MỚI NHẤT</span>
                </div>
                <div class="overflow-hidden mb-5">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Bảng Tin Polygon</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
        <?php $blog_count_tmp = 0; ?>
        <?php foreach ($blogs['new'] as $key => $value): ?>
            <?php if($blog_count_tmp > 2) break; ?>
            <div class="col-md-4">
                <article class="blog-post">
                    <header class="mb-2">
                        <div class="image-frame hover-effect-2">
                            <a href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id])?>" class="d-block appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="700ms">
                                <?= $this->Html->image('/filemanager/uploads/'.$value->preview,[
                                    "class"=>"img-fluid mb-3", 
                                    "alt"=>""
                                ]) ?>
                            </a>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="700ms">
                            <h3 class="font-weight-bold text-4 mb-0">
                                <a href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id])?>" class="link-color-dark">
                                    <?= $value->title ?>
                                </a>   
                            </h3>
                            <i class="far fa-clock mt-1 text-color-primary"></i>
                            <time class="font-tertiary text-1" datetime="<?= $value->created ?>"><?= $value->created ?></time>
                        </div>
                    </header>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="700ms"><?= $value->description ?></p>
                </article>
            </div>
            <?php $blog_count_tmp++; ?>
        <?php endforeach; ?>
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'index'])?>" class="btn btn-outline btn-primary btn-h-4 btn-v-3 font-weight-semibold text-0">XEM TẤT CẢ</a>
            </div>
        </div>
    </div>
</section>