<template>
    <div class="container ">
        <div class="featured-posts-slider">
        </div>
        <div class="row wrapper-main-content">
            <div class="has-sidebar col-md-12 col-lg-8">
                <div class="main-left main-content">
                    <div id="home_feature_posts_widget-2" class="widget home_feature_posts_widget">
                        <h4 class="widget-title">Food &amp; Drink</h4>
                        <div class="baloo-feature-cat list">
                            <div class="baloo-blog blog-list">
                                <div class="post-37 post type-post status-publish format-standard has-post-thumbnail hentry category-food-drink category-lifestyle">
                                    <div class="post-inner">
                                        <div class="post-format"> <a href="http://baloo.az-theme.net/21-crazy-fast-dessert-recipes-that-crush-sugar/" style="background-image: url('http://baloo.az-theme.net/wp-content/uploads/2019/05/iryna-ogarkova-447661-unsplash.jpg');"></a>
                                        </div>
                                        <div class="post-info">
                                            <div class="post-cats"><a href="http://baloo.az-theme.net/category/food-drink/" rel="category tag">Food &amp; Drink</a> <a href="http://baloo.az-theme.net/category/lifestyle/" rel="category tag">Lifestyle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div id="sidebar" class="sidebar">
                    <div id="baloo_latest_posts_widget-2" class="widget baloo_latest_posts_widget"><h4 class="widget-title">List Posts</h4>
                        <div class="baloo-post-widget list">
                            <div class="list-post-thumb">
                                <div class="post-item">
                                    <div class="post-format">
                                        <figure>
                                            
                                            <img src="http://baloo.az-theme.net/wp-content/uploads/2019/05/paige-cody-1276949-unsplash-585x390.jpg" alt="Uniform">
                                        </figure>
                                    </div>
                                    <div class="post-info">
                                        <h3 class="post-title">
                                            <a href="http://baloo.az-theme.net/angelina-jolie-has-found-the-perfect-summer-office-uniform/">Angelina Jolie Has Found the Perfect Summer Office Uniform
                                            </a>
                                        </h3>
                                        <div class="post-meta">
                                            <div class="ath-post"> <span>by</span> admin
                                            </div>
                                            <div class="date-post"> <span class="post-date">May 23, 2019</span>
                                            </div>
                                            <div class="comment-number"> No Comments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</template>


       

<script>
    export default {
        data(){
        
        return{
            form: new Form({
            title:'',  
            body: '',
            photo:''
            })
        }
      },
        methods: {
            
           
            
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.widget {
    margin-bottom: 50px;
}
.widget-title {
    text-transform: uppercase;
    border-bottom: 2px solid;
    line-height: 30px;
    letter-spacing: 1px;
}

.baloo-post-widget.list .list-post-thumb .post-item {
    overflow: hidden;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.baloo-post-widget.list .list-post-thumb .post-format {
    float: left;
    width: 120px;
    margin-right: 20px;
}
</style>