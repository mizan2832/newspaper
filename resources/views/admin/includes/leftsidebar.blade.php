<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>News</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.news.create')}}">
                                    <span>Create</span>
                                </a>
                               
                            </li>
                             <li>
                                <a>
                                    <span>Edit</span>
                                </a>
                               
                            </li>
                             
                               
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Category</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.category.create')}}" >
                                    <span>Create</span>
                                </a>
                               
                            </li>
                             <li>
                                <a>
                                    <span>Edit</span>
                                </a>
                               
                            </li>
                             
                               
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Tags</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a  href="{{ route('admin.tag.create') }}">
                                    <span>Create</span>
                                </a>
                               
                            </li>
                             
                             
                               
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Role</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a >
                                    <span>Create</span>
                                </a>
                               
                            </li>
                             <li>
                                <a>
                                    <span>Edit</span>
                                </a>
                               
                            </li>
                             
                               
                            </li>
                            
                        </ul>
                    </li>
                   
                    
                  
                  
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">News Portal- All Right Reserved</a>.
                </div>
              
            </div>
            <!-- #Footer -->
        </aside>