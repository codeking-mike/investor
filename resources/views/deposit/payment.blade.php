@extends('accountlayout')

@section('content')

<div class="content">

    

    <div class="row mb-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <div class="card card-tasks" style="">
                    <div class="card-header">
                        <h4 class="title d-inline">Make Payment</h4>
                        <p>Make payment to any of the account numbers shown below. After payment, upload your proof of payment for 
                            confirmation and verification.
                        </p>
                        
                           
                    </div>
                    @foreach($accounts as $account)
                    <div class="card-body ">
                      <div class="table-full-width table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                
                                <p class="text-muted">Momo Name
                                </p>
                              </td>
                              <td class="td-actions text-right">
                                {{$account->momoname}}
                              </td>
          
                            </tr>
                            <tr>
                                <td>
                                  
                                  <p class="text-muted">Momo Number
                                  </p>
                                </td>
                                <td class="td-actions text-right">
                                 <span id="copy"> {{$account->momono}}</span>
                                  <a href="#" onclick="copyContent()" class="text-success"> <i class="tim-icons icon-single-copy-04"></i>Copy</a>
                                
                                </td>
            
                              </tr>
                              <tr>
                                <td>
                                  
                                  <p class="text-muted">network
                                  </p>
                                </td>
                                <td class="td-actions text-right">
                                  {{$account->network}}
                                </td>
            
                              </tr>
                           
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="card-footer">
                        <div class="card-category">
                            <h4 class="card-title pb-3">Upload POP</h4>
                            @if ($dep->pop != null)

                            <h5>Pop Uploaded</h5>
                            <div class="card col-md-3">
                              <img class="card-img-top" src="/storage/{{$dep->pop}}" width="200" height="230" alt="">
                              <p>Proof of payment uploaded, awaiting confirmation</p>
                            </div>
                            
                                
                            @endif
                            
                        </div>
                        <form action="/deposit/{{$dep->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="pop" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Choose file">
                                  <span class="input-group-append">
                                    
                                  </span>
                                </div>
                            </div>
                        
                           
                            <div class="form-group">
                              <input type="submit" name="upload_proof" class="btn btn-dark btn-lg btn-block" value="UPLOAD POP" />
                            
                            </div>
                            
                        </form>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            
                </div>
                
                

             </div>
        </div>
    </div>
    

</div>
<script>
    let text = document.getElementById('copy').innerHTML;
    const copyContent = async () => {
      try {
        await navigator.clipboard.writeText(text);
        alert('Content copied to clipboard');
      } catch (err) {
        alert('Failed to copy: ', err);
      }
    }
</script>
@endsection
