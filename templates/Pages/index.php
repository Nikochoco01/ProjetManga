<div class="album py-5 bg-light">
    <div class="container">
      <div class="row vh-100 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php for($i = 0; $i < 6; $i++): ?>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="img/taktOpDestiny.jpe" alt="Anime Picture">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor ?>
      </div>
    </div>
</div>