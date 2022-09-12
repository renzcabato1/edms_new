@extends('layouts.tracking')

@section('title', 'Request Entry Tracking')

@section('content')
  <div class="row d-flex justify-content-center mt-70 mb-70">
      <div class="col-md-6">
        <h5 class="card-title">User Timeline</h5>
          <div class="main-card mb-3 card">
              <div class="card-body">
                  <h5 class="card-title">Timeline</h5>
                  <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"></i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Meeting with client</h4>
                                  <p>Meeting with USA Client, today at <a href="javascript:void(0);" data-abc="true">12:00 PM</a></p> <span class="vertical-timeline-element-date">9:30 AM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                  <p>Yet another one, at <span class="text-success">5:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                  <p>meeting with team mates about the launch of new product. and tell them about new features</p> <span class="vertical-timeline-element-date">6:00 PM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                  <p>Discussion with marketing team about the popularity of last product</p> <span class="vertical-timeline-element-date">9:00 AM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Purchase new hosting plan</h4>
                                  <p>Purchase new hosting plan as discussed with development team, today at <a href="javascript:void(0);" data-abc="true">10:00 AM</a></p> <span class="vertical-timeline-element-date">10:30 PM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                  <p>Yet another one, at <span class="text-success">1:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                  <p>Yet another one, at <span class="text-success">5:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                  <p>meeting with team mates about the launch of new product. and tell them about new features</p> <span class="vertical-timeline-element-date">6:00 PM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                  <p>Discussion with marketing team about the popularity of last product</p> <span class="vertical-timeline-element-date">9:00 AM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Purchase new hosting plan</h4>
                                  <p>Purchase new hosting plan as discussed with development team, today at <a href="javascript:void(0);" data-abc="true">10:00 AM</a></p> <span class="vertical-timeline-element-date">10:30 PM</span>
                              </div>
                          </div>
                      </div>
                      <div class="vertical-timeline-item vertical-timeline-element">
                          <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                              <div class="vertical-timeline-element-content bounce-in">
                                  <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                  <p>Yet another one, at <span class="text-success">1:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection