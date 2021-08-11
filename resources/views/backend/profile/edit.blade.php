@extends('backend.layouts.app')
@section('content')



 
<div class="card"> 
  
    
  
   
<div class="container bootstrap snippets bootdeys">
<form action="{{ route('profile.update', $user->UserDetails->id) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
    <div class="row" id="user-profile">
        
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="main-box clearfix">
                <h2>{{ $user->name}} </h2>
               
                <img src="{{$user->UserDetails->image_path}}" alt="" class="profile-img img-responsive center-block" style="width: 100%";>
               
               
                <div class="form-group row">
                     <label for="inputEmail3" class=" col-form-label form-control-sm">Change Image</label>
                        <div class="">
                            <input type="file" name="image_path" class="form-control" id="image_path">
                        </div>
                 </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="main-box clearfix">
                <div class="profile-header">
                    <h3><span>User info: Edit</span></h3>
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
                    
                </div>
               
                <div class="row profile-user-info">
                   
                                <div class="col-sm-8">
                            
                                    <div class="form-group row">
                                            <label for="firstname" class="col-sm-3 col-form-label form-control-sm">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="firstname" value="{{ isset($user->UserDetails->firstname) ? $user->UserDetails->firstname:''  }}" class="form-control form-control-sm" id="firstname" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="lastname" class="col-sm-3 col-form-label form-control-sm">Last Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="lastname" value="{{ isset($user->UserDetails->lastname) ? $user->UserDetails->lastname:''  }}" class="form-control form-control-sm" id="lastname" >
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                            <label for="qualification" class="col-sm-3 col-form-label form-control-sm">Qualification :</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="qualification" value="{{ isset($user->UserDetails->qualification) ? $user->UserDetails->qualification:''  }}" class="form-control form-control-sm" id="qualification" >
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label form-control-sm">Email(Reg):</label>
                                        <div class="col-sm-9">
                                            <input type="email"  name="email" value=" {{ $user->email ? $user->email:''  }}" class="form-control form-control-sm" id="email" readonly>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                            <label for="second_text" class="col-sm-3 col-form-label form-control-sm">Second Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email"  name="second_email" value="{{ isset($user->UserDetails->second_email) ? $user->UserDetails->second_email:''  }}" class="form-control form-control-sm" id="inputEmail3" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                        <label for="address_line1" class="col-form-label form-control-sm">Address:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text"  name="address_line1" value=" {{ isset($user->UserDetails->address_line1) ? $user->UserDetails->address_line1:''  }}" class="form-control form-control-sm" id="address_line1" >
                                            <input type="text"  name="address_line2" value=" {{ isset($user->UserDetails->address_line2) ? $user->UserDetails->address_line2:''  }}" class="form-control form-control-sm" id="address_line2" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 profile-social">
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                        <i class="fa fa-twitter-square"></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text"  name="twitter" value="{{ isset($user->UserDetails->twitter) ? $user->UserDetails->twitter:''  }}" class="form-control form-control-sm" id="twitter" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                        <i class="fa fa-linkedin-square"></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text"  name="linkedin" value="{{ isset($user->UserDetails->linkedin) ? $user->UserDetails->linkedin:''  }}" class="form-control form-control-sm" id="inputEmail3" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                        <i class="fa fa-facebook-square"></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text"  name="facebook" value="{{ isset($user->UserDetails->facebook) ? $user->UserDetails->facebook:''  }}" class="form-control form-control-sm" id="facebook" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                        <i class="fa fa-skype"></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text"  name="skype" value="{{ isset($user->UserDetails->skype) ? $user->UserDetails->skype:''  }}" class="form-control form-control-sm" id="skype" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                        <i class="fa fa-instagram"></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text"  name="instagram" value="{{ isset($user->UserDetails->instagram) ? $user->UserDetails->instagram:''  }}" class="form-control form-control-sm" id="instagram" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                        <label for="address_pincode" class="col-form-label form-control-sm">Pincode:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number"  name="address_pincode" value="  {{ isset($user->UserDetails->address_pincode) ? $user->UserDetails->address_pincode:''  }}" class="form-control form-control-sm" id="address_pincode" >
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                        <label for="address_city" class="col-form-label form-control-sm"> City:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="address_city" value=" {{ isset($user->UserDetails->address_city) ? $user->UserDetails->address_city:''  }}" class="form-control form-control-sm" id="address_city" >
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                        <label for="address_state" class="col-form-label form-control-sm">  State:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="address_state" value="    {{ isset($user->UserDetails->address_state) ? $user->UserDetails->address_state:''  }}" class="form-control form-control-sm" id="address_state" >
                                        
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                        <label for="address_country" class="col-form-label form-control-sm"> Country:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="address_country" value=" {{ isset($user->UserDetails->address_country) ? $user->UserDetails->address_country:''  }}" class="form-control form-control-sm" id="address_country" >
                                        
                                        </div>
                                    </div>

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                    <label for="phone" class="col-form-label form-control-sm">Phone:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number"  name="phone" value="{{ isset($user->UserDetails->phone) ? $user->UserDetails->phone:''  }}" class="form-control form-control-sm" id="phone" >
                                    
                                    </div>
                                </div>
                                

                                </div>
                            <input class="btn btn-danger save-profile" type="submit" name="" value="Save profile">
                            
                   
                       
                    
                   
                </div>
                </form>


                @if (auth()->user()->role_id == 1)
                <div class="tabs-wrapper profile-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-activity" data-toggle="tab">Activity</a></li>
                        <li><a href="#tab-friends" data-toggle="tab">Friends</a></li>
                        <li><a href="#tab-chat" data-toggle="tab">Chat</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-activity">

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-comment"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                                John Doe  changed order status from <span class="label label-primary">Pending</span> to <span class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-heart"></i>
                                            </td>
                                            <td>
                                                John Doe  changed order status from <span class="label label-warning">On Hold</span> to <span class="label label-danger">Disabled</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                                John Doe  changed order status from <span class="label label-primary">Pending</span> to <span class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-friends">
                            <ul class="widget-users row">
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">John Doe </a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: 5 minutes ago
                                        </div>
                                        <div class="type">
                                            <span class="label label-danger">Admin</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Mila Kunis</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                        <div class="type">
                                            <span class="label label-warning">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Ryan Gossling</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Robert Downey Jr.</a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: Thursday
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Emma Watson</a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: 1 week ago
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">George Clooney</a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: 1 month ago
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Mila Kunis</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                        <div class="type">
                                            <span class="label label-warning">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Ryan Gossling</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <br>
                            <a href="#" class="btn btn-success pull-right">View all users</a>
                        </div>

                        <div class="tab-pane fade" id="tab-chat">
                            <div class="conversation-wrapper">
                                <div class="conversation-content">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 340px;">
                                        <div class="conversation-inner" style="overflow: hidden; width: auto; height: 340px;">

                                            <div class="conversation-item item-left clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Ryan Gossling
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 18:28
                                                    </div>
                                                    <div class="text">
                                                        I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-right clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Mila Kunis
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 12:45
                                                    </div>
                                                    <div class="text">
                                                        Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-right clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Mila Kunis
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 12:45
                                                    </div>
                                                    <div class="text">
                                                        Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-left clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Ryan Gossling
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 18:28
                                                    </div>
                                                    <div class="text">
                                                        I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-right clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Mila Kunis
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 12:45
                                                    </div>
                                                    <div class="text">
                                                        Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div>
                                        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                                    </div>
                                </div>
                                <div class="conversation-new-message">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="2" placeholder="Enter your message..."></textarea>
                                        </div>

                                        <div class="clearfix">
                                            <button type="submit" class="btn btn-success pull-right">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
    

    
   
 </div> 
 </div>  

<footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2021 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
          </div>
</footer>



@endsection 