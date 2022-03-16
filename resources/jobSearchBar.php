<style>

.jobSearchContainer .btn.btn-primary {
  background-color: #5c4084;
  border-color: #5c4084;
  outline: none;
}

.jobSearchContainer .btn.btn-primary:hover {
    background-color: darken(#5c4084, 10%);
    border-color: darken(#5c4084, 10%);
  }
.jobSearchContainer .btn.btn-primary:active, .btn.btn-primary:focus {
    background-color: lighten(#5c4084, 5%);
    border-color: lighten(#5c4084, 5%);
}

.jobSearchContainer .jobSearchInput{
    border-top-right-radius: 0px 0px;
    border-bottom-right-radius: 0px 0px;
}
.jobSearchContainer .jobSearchButton{
    border-top-left-radius: 0px 0px;
    border-bottom-left-radius: 0px 0px;  
}
</style>
<div class="jobSearchContainer">
    <div class="input-group shadow">
      <input type="text" class="form-control form-control-lg jobSearchInput" placeholder="Search Jobs">
      <button class="browse btn btn-primary jobSearchButton px-4" type="button">Search <i class="fas-solid fas-magnifying-glass"></button>
    </div>
</div>
