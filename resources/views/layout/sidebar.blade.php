<div class="leftpanel">
                    <div class="media profile-left">
                    	@if($profilePhoto!='')
                        <a class="pull-left profile-thumb" href="#">
                            <img class="img-circle" src="{{action('ThumbController@generate', $profilePhoto.'X60X60X4')}}" alt="">
                        </a>
                        @else
                        	<a class="pull-left profile-thumb" href="#">
                            	<img class="img-circle" src="/images/noImage.jpg" alt="">
                        	</a>
                        @endif
                        <div class="media-body">
                            <h4 class="media-heading">{{$profile->firstname}} {{$profile->lastname}}</h4>
                            <!-- <small class="text-muted">Since {{date('m/d/Y' , strtotime(Auth::user()->created_at))}}</small> -->
                        </div>
                    </div><!-- media -->
                    
                    <div class="leftpanel-title"><a href="http://social.vapeix.com" target="_blank" title="Vapeix Social"><span class="lptitle">Vapeix Social</span> <i class="fa fa-random"></i></a></div>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                                                   
                          <li><a href="/userdevices"><i class="fa fa-cube"></i> <span>Devices</span></a>
                         </li>
                          <li><a href="http://store.vapeix.com" target="_blank"><i class="fa fa-shopping-cart"></i> <span>Store</span></a></li>
                          @if(Auth::user()->usertype == 2)
                          <li><a href="/customers"><i class="fa fa-users"></i> <span>Users</span></a> </li>
                           @endif 
                            <li><a href="/clients"><i class="fa fa-star-o"></i> <span>Clients</span></a> </li>
                             <li><a href="#"><i class="fa fa-qrcode"></i> <span>Products</span></a>   </li>
                             <li><a href="/serial"><i class="fa fa-barcode"></i> <span>Serials</span></a> </li>
                             @if(Auth::user()->usertype == 2)
                         
                         <li><a href="/adminusers/create"><i class="fa fa-user"></i> <span>Admin</span></a>
                         </li>
                           @endif  

                          <li><a href="/ticket"><i class="fa fa-support"></i> <span>Support</span></a>
                            
                         </li>
                             <li class="parent"><a href="#"><i class="fa fa-file-pdf-o"></i> <span>Reports</span></a>
                           <ul class="children">
                                <li><a href="code-editor.html">Puff Report</a></li>
                                <li><a href="general-forms.html">Location Report</a></li>
                                <li><a href="form-layouts.html">Tobacco vs Catridge</a></li>
                            
                            </ul>
                         </li>
                    
                        
                    </ul>
                    
                </div><!-- leftpanel -->
