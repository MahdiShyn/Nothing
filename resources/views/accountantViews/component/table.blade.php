<div>
    <div id="accordion" style="padding: 10px;">
        {{-- new payment --}}
        {{-- @foreach($newPayment as $NP) --}}
@for ($i=0;$i<5;$i++)
        <div class="card border-primary"
            style="border-width: 3px !important; margin-bottom: 10px; border-radius: 25px;">
            <div class="card-header ">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="Plus-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </symbol>
                </svg>
                <svg class="bi flex-shrink-0 me-2 d-inline" style="color: blue" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#Plus-circle-fill" />
                </svg>
                <a class="btn " data-bs-toggle="collapse" href="#collapse{{ $i }}">
                    {{-- Factor Id : {{ $NP['id'] }} --}}
                    Factor Id : 12345
                </a>
            </div>
            <div id="collapse{{ $i }}" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Name : </td>
                                <td>Car Model :</td>
                            <tr>
                                <td>Customer id : </td>
                                <td>Car id : </td>
                            </tr>
                            <tr>
                                <td>First Phone Number : </td>
                                <td>Second Phone Number : </td>
                            </tr>
                            <tr>
                                {{-- colspan="2" --}}
                                <td>Service : (<b class="text-danger">1000 $</b>)</td>
                                <td>Pay Price : </td>
                            </tr>
                            <tr>
                                <td>Discount : (<b class="text-danger">Code</b>)</td>
                                <td>Payment Method : </td>
                            </tr>
                            <tr>
                                <td>Status : </td>
                                <td>Worker : </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#descriptionModal{{ $i }}">Description</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="descriptionModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iusto earum modi adipisci mollitia asperiores possimus! Aut placeat quod beatae voluptate facere sunt eaque, enim, illo maxime voluptatum, earum molestiae.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#reciptPictureModal{{ $i }}">Recipt Picture</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reciptPictureModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reciptPictureModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reciptPictureModalLabel">Recipt Picture</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="./src/1.jpg" class="img-fluid" alt="...">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#deskclerkNoteModal{{ $i }}">Deskclerk Note</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deskclerkNoteModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="deskclerkNoteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deskclerkNoteModalLabel">Deskclerk Note</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dignissimos deserunt veritatis tempore fuga placeat dolorum, ipsam, cumque numquam nulla at esse totam. Nulla quos suscipit dolorem odit, sit et!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#reportProblemModal{{ $i }}">Report Problem</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reportProblemModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reportProblemModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reportProblemModalLabel">Report Problem</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endfor
{{-- zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz --}}
        @for ($i=5;$i<10;$i++)
        <div class="card border-danger"
            style="border-width: 3px !important; margin-bottom: 10px; border-radius: 25px;">
            <div class="card-header ">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="bi-exclamation-triangle" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>

                    </symbol>
                </svg>
                <svg class="bi flex-shrink-0 me-2 d-inline" style="color: red" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#bi-exclamation-triangle" />
                </svg>
                <a class="btn " data-bs-toggle="collapse" href="#collapse{{ $i }}">
                    {{-- Factor Id : {{ $NP['id'] }} --}}
                    Factor Id : 12345
                </a>
            </div>
            <div id="collapse{{ $i }}" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Name : </td>
                                <td>Car Model :</td>
                            <tr>
                                <td>Customer id : </td>
                                <td>Car id : </td>
                            </tr>
                            <tr>
                                <td>First Phone Number : </td>
                                <td>Second Phone Number : </td>
                            </tr>
                            <tr>
                                {{-- colspan="2" --}}
                                <td>Service : (<b class="text-danger">1000 $</b>)</td>
                                <td>Pay Price : </td>
                            </tr>
                            <tr>
                                <td>Discount : (<b class="text-danger">Code</b>)</td>
                                <td>Payment Method : </td>
                            </tr>
                            <tr>
                                <td>Status : </td>
                                <td>Worker : </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#descriptionModal{{ $i }}">Description</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="descriptionModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iusto earum modi adipisci mollitia asperiores possimus! Aut placeat quod beatae voluptate facere sunt eaque, enim, illo maxime voluptatum, earum molestiae.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#reciptPictureModal{{ $i }}">Recipt Picture</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reciptPictureModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reciptPictureModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reciptPictureModalLabel">Recipt Picture</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="./src/1.jpg" class="img-fluid" alt="...">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#deskclerkNoteModal{{ $i }}">Deskclerk Note</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deskclerkNoteModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="deskclerkNoteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deskclerkNoteModalLabel">Deskclerk Note</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dignissimos deserunt veritatis tempore fuga placeat dolorum, ipsam, cumque numquam nulla at esse totam. Nulla quos suscipit dolorem odit, sit et!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#reportProblemModal{{ $i }}">Report Problem</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reportProblemModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reportProblemModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reportProblemModalLabel">Report Problem</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endfor
{{-- zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz --}}
        @for ($i=10;$i<15;$i++)
        <div class="card border-success"
            style="border-width: 3px !important; padding: 2px; margin-bottom: 10px; border-radius: 25px;">
            <div class="card-header">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                    <svg class="bi flex-shrink-0 me-2 d-inline" style="color: green" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                <a class="btn d-inline" data-bs-toggle="collapse" href="#collapse{{ $i }}">
                    {{-- Factor Id : {{ $NP['id'] }} --}}
                    Factor Id : 12345
                </a>
            </div>
            <div id="collapse{{ $i }}" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Name : </td>
                                <td>Car Model :</td>
                            <tr>
                                <td>Customer id : </td>
                                <td>Car id : </td>
                            </tr>
                            <tr>
                                <td>First Phone Number : </td>
                                <td>Second Phone Number : </td>
                            </tr>
                            <tr>
                                {{-- colspan="2" --}}
                                <td>Service : (<b class="text-danger">1000 $</b>)</td>
                                <td>Pay Price : </td>
                            </tr>
                            <tr>
                                <td>Discount : (<b class="text-danger">Code</b>)</td>
                                <td>Payment Method : </td>
                            </tr>
                            <tr>
                                <td>Status : </td>
                                <td>Worker : </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#descriptionModal{{ $i }}">Description</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="descriptionModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iusto earum modi adipisci mollitia asperiores possimus! Aut placeat quod beatae voluptate facere sunt eaque, enim, illo maxime voluptatum, earum molestiae.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#reciptPictureModal{{ $i }}">Recipt Picture</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reciptPictureModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reciptPictureModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reciptPictureModalLabel">Recipt Picture</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="./src/1.jpg" class="img-fluid" alt="...">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#deskclerkNoteModal{{ $i }}">Deskclerk Note</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deskclerkNoteModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="deskclerkNoteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deskclerkNoteModalLabel">Deskclerk Note</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dignissimos deserunt veritatis tempore fuga placeat dolorum, ipsam, cumque numquam nulla at esse totam. Nulla quos suscipit dolorem odit, sit et!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#reportProblemModal{{ $i }}">Report Problem</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reportProblemModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reportProblemModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reportProblemModalLabel">Report Problem</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endfor


        @for ($i=15;$i<20;$i++)
        <div class="card border-dark"
            style="border-width: 3px !important; margin-bottom: 10px; border-radius: 25px;">
            <div class="card-header ">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="x-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </symbol>
                </svg>
                <svg class="bi flex-shrink-0 me-2 d-inline" style="color: black" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#x-circle-fill" />
                </svg>
                <a class="btn" data-bs-toggle="collapse" href="#collapse{{ $i }}">
                    {{-- Factor Id : {{ $NP['id'] }} --}}
                    Factor Id : 12345
                </a>
            </div>
            <div id="collapse{{ $i }}" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Name : </td>
                                <td>Car Model :</td>
                            <tr>
                                <td>Customer id : </td>
                                <td>Car id : </td>
                            </tr>
                            <tr>
                                <td>First Phone Number : </td>
                                <td>Second Phone Number : </td>
                            </tr>
                            <tr>
                                {{-- colspan="2" --}}
                                <td>Service : (<b class="text-danger">1000 $</b>)</td>
                                <td>Pay Price : </td>
                            </tr>
                            <tr>
                                <td>Discount : (<b class="text-danger">Code</b>)</td>
                                <td>Payment Method : </td>
                            </tr>
                            <tr>
                                <td>Status : </td>
                                <td>Worker : </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#descriptionModal{{ $i }}">Description</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="descriptionModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iusto earum modi adipisci mollitia asperiores possimus! Aut placeat quod beatae voluptate facere sunt eaque, enim, illo maxime voluptatum, earum molestiae.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#reciptPictureModal{{ $i }}">Recipt Picture</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reciptPictureModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reciptPictureModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reciptPictureModalLabel">Recipt Picture</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="./src/1.jpg" class="img-fluid" alt="...">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#deskclerkNoteModal{{ $i }}">Deskclerk Note</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deskclerkNoteModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="deskclerkNoteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deskclerkNoteModalLabel">Deskclerk Note</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dignissimos deserunt veritatis tempore fuga placeat dolorum, ipsam, cumque numquam nulla at esse totam. Nulla quos suscipit dolorem odit, sit et!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#reportProblemModal{{ $i }}">Report Problem</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="reportProblemModal{{ $i }}" tabindex="-1"
                                        aria-labelledby="reportProblemModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reportProblemModalLabel">Report Problem</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endfor

        <?php /*
            @endforeach
            {{--  --}}

            {{-- note payment --}}
            @foreach($notePayment as $NP)
                {{--  --}}
            @endforeach
            {{--  --}}

            {{-- confirm payment --}}
            @foreach($confirmPayment as $CP)
                {{--  --}}
            @endforeach
            {{--  --}}

            {{-- cancel payment --}}
            @foreach($cancelPayment as $CP)
                {{--  --}}
            @endforeach
            {{--  --}}
*/?>

