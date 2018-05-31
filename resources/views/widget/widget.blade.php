<link href="{{ asset('css/widget.css') }}" rel="stylesheet">

<link href="{{ asset('flexboxgrid/flexboxgrid.css') }}" rel="stylesheet">
 <h2 id="headingWidget">AROUND THE WEB</h2> 

<div class="rdgWidgetNewsArticles">
    <div class="container-fluid putBorder">                                    
                   <div class="row">
                       
                        @foreach($articles as $article)   
                                                                
                                <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2">     
                                    <a target="_blank" href="{{$article->url}}" class="nullStyle">                            
                                        <div style="margin-top:19%; background-image: url(http://{{$server}}:7070/Miercoles/public/getImage/{{$article->id}}/{{$article->order}})" class="imageStyle"></div>
                                        <b class="snippetWidget">{{$article->snippet}}</b>  
                                    </a>                                                                                                                            
                                </div>                                                                                      
                        @endforeach                                                                               
                      
            </div>
    </div>
</div>    