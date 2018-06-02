<?php use Cake\i18n\Time; ?>
<?= $this->Element('Homepage/Header/header')?>
<section class="page-header mb-0" id="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-left">
                <span class="tob-sub-title text-color-primary d-block">OUR BLOG</span>
                <h1 class="font-weight-bold">Masonry - 3 Columns</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb justify-content-start justify-content-md-end">
                    <li><a href="#">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row masonry-loader masonry-loader-showing portfolio-list portfolio-list-style-2" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
            <?php foreach ($blogList as $key => $value): ?>
            <div class="col-sm-6 col-md-4 isotope-item mb-5 p-0">
                <div class="portfolio-item">
                    <article class="blog-post">
                        <span class="top-sub-title text-color-primary"><?= $value->created->nice('Asia/Ho_Chi_Minh','vi-VN') ?></span>
                        <h2 class="font-weight-bold text-4 mb-3">
                            <a href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id]) ?>" class="link-color-dark blog-pl-title"><?= $value->title ?></a>
                        </h2>									
                        <div class="image-frame hover-effect-2">
                            <div class="image-frame-wrapper">
                                <a href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id]) ?>">
                                    <?= $this->Html->image('/filemanager/uploads/'.$value->preview,[
                                        'class' => 'img-fluid'
                                    ]) ?>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex opacity-6 my-2">
                            <span class="post-likes d-flex align-items-center border border-grey border-top-0 border-bottom-0 border-left-0 pl-0 pr-3"><i class="lnr lnr-heart text-3 mr-1" aria-label="13 users like this post"></i> <?= $value->likes ?></span>
                            <a href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id,'?'=> ['scrollTo' => 'comments']]) ?>">
                                <span class="post-comments d-flex align-items-center px-3"><i class="lnr lnr-bubble text-3 mr-1" aria-label="2 users comment this post"></i> <?= count($value->comments) ?></span>
                            </a>
                            
                        </div>
                        <hr class="mt-0 mb-3">
                        <p class="text-color-light-3 blog-pl-description"><?= $value->description ?></p>
                        <a href="<?= $this->Url->build(['controller'=>'Blogs','action'=>'view',$value->id]) ?>" class="text-color-primary font-weight-bold learn-more">XÊM THÊM <i class="fas fa-angle-right text-3" aria-label="Read more"></i></a>
                    </article>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php 
            $this->Paginator->setTemplates([
                'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                'first' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                'last' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                'prevDisabled' =>  '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
            ]);                                            
        ?>
        <hr class="mt-5 mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto mb-3 mb-sm-0">
                <span><?= $this->Paginator->counter(['format' => __('Hiển thị {{current}} bài viết trên {{count}} kết quả.')]) ?></span>
            </div>
            <div class="col-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0" >
                        <?= $this->Paginator->first('<i class="fas fa-angle-double-left" aria-label="Đầu"></i>',['escape'=>false]) ?>
                        <?= $this->Paginator->prev('<i class="fas fa-angle-left" aria-label="Trước"></i>',['escape'=>false]) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('<i class="fas fa-angle-right" aria-label="Sau"></i>',['escape'=>false]) ?>
                        <?= $this->Paginator->last('<i class="fas fa-angle-double-right" aria-label="Cuối"></i>',['escape'=>false]) ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>