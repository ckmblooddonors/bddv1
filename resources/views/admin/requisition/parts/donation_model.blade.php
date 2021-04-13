<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#donation" data-whatever="@mdo">{{__(Donation)}}</button>
              <div class="modal fade" id="donation" tabindex="-1" role="dialog" aria-labelledby="donation" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{__("Create Message")}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('admin.requisition.donation.store',$data->id)}}" method="POST">
                        @csrf
                       <div class="form-group">
                          <div class="form-group">    
                              <label for="type">{{__("Donation Type")}} : </label>
                              <select class="form-control" name="type">
                                <option value="1">{{__("Blood")}}</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">{{__("Message")}}:</label>
                          <textarea class="form-control" name="donation" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="unit-text" class="col-form-label">{{__("Unit")}}:</label>
                          <input type="number" class="form-control" name="unit" id="unit-text"></input>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__("Close")}}</button>
                      <button type="submit" class="btn btn-primary">{{__("Send message")}}</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div> 
              
            </div>
