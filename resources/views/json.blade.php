<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <title>POSTON.io | JSON</title>
  </head>
  <body>
    <div class="container-fluid px-lg-5 py-4">
      <div class="d-flex align-items-center">
        <h4 class="text-secondary">JSON settings</h4>
        <span class="text-secondary mx-3 mb-2">|</span>
        <i class="ri-home-smile-2-line text-secondary mb-1 me-2 fw-bold"></i>
        <span><i class="ri-arrow-right-s-line text-secondary"></i></span>
        <p class="m-0 p-0 text-secondary mx-3">Integration</p>
        <span><i class="ri-arrow-right-s-line text-secondary"></i></span>
        <p class="text-primary m-0 p-0 ms-2">JSON settings</p>
      </div>

      <button class="mt-4">
        <i class="ri-add-circle-line"></i> JSON
      </button>

      <div class="row bg-white px-2 py-3 rounded mt-4">
        <div class="col d-flex align-items-center justify-content-end">
          <label for="search">Search :</label>
          <input class="ms-2" type="text" />
        </div>

        <div class="row mt-3">
          <div class="col">
            <table class="table border">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">JSON Name</th>
                  <th scope="col">JSON ID</th>
                  <th scope="col">JSON SECRET</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="6">
                    <h6 class="text-secondary m-0 m-3">
                      No data available in table
                    </h6>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="d-flex align-items-center">
          <p class="m-0">SHOW</p>
          <select class="px-2 ms-2" style="border: 1.5px solid #6b28f2">
            <option value="">10</option>
            <option value="">20</option>
            <option value="">30</option>
          </select>
          <p class="m-0 ms-2">ENTRIES</p>
        </div>

        <div class="row mt-4">
          <div class="col">
            <div class="d-flex align-items-center justify-content-between">
              <p class="m-0">Showing 0 to 0 of 0 entries</p>
              <div class="d-flex align-items-center">
                <p
                  style="background-color: #f2f4f4; cursor: pointer;"
                  class="m-0 px-2 py-1 rounded"
                >
                  Previous
                </p>
                <p class="m-0 ms-2">1</p>
                <p
                  style="background-color: #f2f4f4; cursor: pointer;"
                  class="m-0 ms-2 px-2 py-1 rounded"
                >
                  Next
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
