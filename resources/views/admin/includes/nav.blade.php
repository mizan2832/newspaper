<ul class="nav navbar-nav side-nav">
                <li><a href="./"><i class="fa fa-fw fa-dashboard"></i> Dashboard <i class="fa fa-fw  pull-right"></i></a>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-star"></i> NEWS <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        
                        <li>
                            <a href="{{route('admin.news.create')}}"><i class="fa fa-angle-double-right"></i>  ADD NEWS</a>
                        </li>
                       <li>
                            <a href="{{route('admin.news.index')}}"><i class="fa fa-angle-double-right"></i>  All NEWS</a>
                        </li>
                   
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> CATEGORY <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li>
                            <a href="{{route('admin.category.create')}}"><i class="fa fa-angle-double-right"></i>  ADD CATEGORY</a>
                        </li>
                       
                   
                    </ul>
                </li>
                  <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i> TAG <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li>
                            <a href="{{route('admin.tag.create')}}"><i class="fa fa-angle-double-right"></i>  ADD TAG</a>
                        </li>
                       
                   
                    </ul>
                </li>
           
              


                
            </ul>