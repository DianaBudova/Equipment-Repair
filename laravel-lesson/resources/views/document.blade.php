<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .request {
            padding: 0 10px;
        }
        .get {
            color: green;
        }
        .post {
            color: orange;
        }
        .patch {
            color: blue;
        }
        .delete {
            color: red;
        }
    </style>
</head>

<body>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/role</h3>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "admin",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "name": "client",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/order</h3>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 1,
                    "category_id": 2,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "user_id": 2,
                    "category_id": 1,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/message</h3>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 1,
                    "manager_id": 2,
                    "text": "sometextOne",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "user_id": 2,
                    "manager_id": 1,
                    "text": "sometextTwo",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/category</h3>
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "categoryOne",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "name": "categoryTwo",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/status</h3>
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "done",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "name": "repairing",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/price_detail</h3>
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "order_id": 1,
                    "price": 100,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "order_id": 2,
                    "price": 200,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/product_repair</h3>
                </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 1,
                    "category_id": 2,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "user_id": 2,
                    "category_id": 1,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/product_brand</h3>
                </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "LG",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "name": "Samsung",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/type_repair</h3>
                </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "text": "broken glass",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                },
                {
                    "id": 2,
                    "text": "off speakers",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-19T19:40:09.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading0">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                    <h2 class="request get">GET:</h4>
                    <h3>/api/feedback</h3>
                </button>
            </h2>
            <div id="collapse0" class="accordion-collapse collapse" aria-labelledby="heading0" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "text": "changedFeedback",
                    "created_at": "2023-12-25T19:52:04.000000Z",
                    "updated_at": "2023-12-25T19:54:50.000000Z"
                },
                {
                    "id": 2,
                    "text": "some feedback two",
                    "created_at": "2023-12-25T19:52:04.000000Z",
                    "updated_at": "2023-12-25T19:52:04.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEleven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/role?name=test_role</h3>
                </button>
            </h2>
            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id":3,
                    "name":"test_role",
                    "created_at":"2023-12-23T20:21:23.000000Z",
                    "updated_at":"2023-12-23T20:21:23.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwelve">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/order?user_id=1&category_id=1</h3>
                </button>
            </h2>
            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                <pre>
                {
                    "user_id": "1",
                    "category_id": "1",
                    "updated_at": "2023-12-23T20:56:54.000000Z",
                    "created_at": "2023-12-23T20:56:54.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/message?user_id=1&manager_id=1&text=sometext</h3>
                </button>
            </h2>
            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "user_id": "1",
                    "manager_id": "1",
                    "text": "sometext",
                    "updated_at": "2023-12-23T21:00:21.000000Z",
                    "created_at": "2023-12-23T21:00:21.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/category?name=somename</h3>
                </button>
            </h2>
            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "name": "somename",
                    "updated_at": "2023-12-23T21:01:41.000000Z",
                    "created_at": "2023-12-23T21:01:41.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFifthteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifthteen" aria-expanded="false" aria-controls="collapseFifthteen">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/status?name=somestatus</h3>
                </button>
            </h2>
            <div id="collapseFifthteen" class="accordion-collapse collapse" aria-labelledby="headingFifthteen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "name": "somestatus",
                    "updated_at": "2023-12-23T21:03:04.000000Z",
                    "created_at": "2023-12-23T21:03:04.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSixteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/price_detail?order_id=1&price=100</h3>
                </button>
            </h2>
            <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "order_id": "1",
                    "price": "100",
                    "updated_at": "2023-12-23T21:13:27.000000Z",
                    "created_at": "2023-12-23T21:13:27.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeventeen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/product_repair?category_id=1</h3>
                </button>
            </h2>
            <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "category_id": "1",
                    "updated_at": "2023-12-23T21:15:10.000000Z",
                    "created_at": "2023-12-23T21:15:10.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEightteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/product_brand?name=somename</h3>
                </button>
            </h2>
            <div id="collapseEightteen" class="accordion-collapse collapse" aria-labelledby="headingEightteen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "name": "somename",
                    "updated_at": "2023-12-23T21:16:34.000000Z",
                    "created_at": "2023-12-23T21:16:34.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNineteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/type_repair?text=sometext</h3>
                </button>
            </h2>
            <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                <pre>
                {
                    "text": "sometext",
                    "updated_at": "2023-12-23T21:17:59.000000Z",
                    "created_at": "2023-12-23T21:17:59.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    <h2 class="request post">POST:</h4>
                    <h3>/api/feedback?text=some_feedback_new</h3>
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                <pre>
                {
                    "text": "some_feedback_new",
                    "updated_at": "2023-12-25T19:53:26.000000Z",
                    "created_at": "2023-12-25T19:53:26.000000Z",
                    "id": 3
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwenty">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/role/1?name=new</h3>
                </button>
            </h2>
            <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "new",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:05:26.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/order/1?user_id=2&category_id=1</h3>
                </button>
            </h2>
            <div id="collapseTwentyOne" class="accordion-collapse collapse" aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 2,
                    "category_id": 1,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:22:39.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/order/1?user_id=2&category_id=1</h3>
                </button>
            </h2>
            <div id="collapseTwentyTwo" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 2,
                    "category_id": 1,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:22:39.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/message/1?user_id=1&manager_id=1&text=changedText</h3>
                </button>
            </h2>
            <div id="collapseTwentyTwo" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 1,
                    "manager_id": 1,
                    "text": "changedText",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:48:26.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/category/1?name=changedName</h3>
                </button>
            </h2>
            <div id="collapseTwentyThree" class="accordion-collapse collapse" aria-labelledby="headingTwentyThree" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "changedName",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:51:48.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwentyFour">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/status/1?name=ready</h3>
                </button>
            </h2>
            <div id="collapseTwentyFour" class="accordion-collapse collapse" aria-labelledby="headingTwentyFour" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "ready",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:53:03.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFive" aria-expanded="false" aria-controls="collapseTwentyFive">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/price_detail/1?order_id=1&price=555</h3>
                </button>
            </h2>
            <div id="collapseTwentyFive" class="accordion-collapse collapse" aria-labelledby="headingTwentyFive" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "order_id": 1,
                    "price": 555,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:53:55.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentySix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentySix" aria-expanded="false" aria-controls="collapseTwentySix">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/product_repair/1?category_id=2</h3>
                </button>
            </h2>
            <div id="collapseTwentySix" class="accordion-collapse collapse" aria-labelledby="headingTwentySix" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "category_id": 2,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:56:30.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentySeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentySeven" aria-expanded="false" aria-controls="collapseTwentySeven">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/product_brand/1?name=Phillips</h3>
                </button>
            </h2>
            <div id="collapseTwentySeven" class="accordion-collapse collapse" aria-labelledby="headingTwentySeven" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "Phillips",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T09:00:10.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyEight" aria-expanded="false" aria-controls="collapseTwentyEight">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/type_repair/1?text=broken_phone</h3>
                </button>
            </h2>
            <div id="collapseTwentyEight" class="accordion-collapse collapse" aria-labelledby="headingTwentyEight" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "text": "broken_phone",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T09:02:37.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwenty2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty2" aria-expanded="false" aria-controls="collapseTwenty2">
                    <h2 class="request patch">PATCH:</h4>
                    <h3>/api/type_repair/1?text=changedFeedback</h3>
                </button>
            </h2>
            <div id="collapseTwenty2" class="accordion-collapse collapse" aria-labelledby="headingTwenty2" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "text": "changedFeedback",
                    "created_at": "2023-12-25T19:52:04.000000Z",
                    "updated_at": "2023-12-25T19:54:50.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwentyNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyNine" aria-expanded="false" aria-controls="collapseTwentyNine">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/role/1</h3>
                </button>
            </h2>
            <div id="collapseTwentyNine" class="accordion-collapse collapse" aria-labelledby="headingTwentyNine" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "new",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:05:26.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirty">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyThirty" aria-expanded="false" aria-controls="collapseTwentyThirty">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/order/1</h3>
                </button>
            </h2>
            <div id="collapseTwentyThirty" class="accordion-collapse collapse" aria-labelledby="headingTwentyThirty" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 2,
                    "category_id": 1,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:22:39.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyThirtyOne" aria-expanded="false" aria-controls="collapseTwentyThirtyOne">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/message/1</h3>
                </button>
            </h2>
            <div id="collapseTwentyThirtyOne" class="accordion-collapse collapse" aria-labelledby="headingTwentyThirtyOne" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "user_id": 1,
                    "manager_id": 1,
                    "text": "changedText",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:48:26.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyTwo" aria-expanded="false" aria-controls="collapseThirtyTwo">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/category/1</h3>
                </button>
            </h2>
            <div id="collapseThirtyTwo" class="accordion-collapse collapse" aria-labelledby="headingThirtyTwo" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "changedName",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:51:48.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyThree" aria-expanded="false" aria-controls="collapseThirtyThree">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/status/1</h3>
                </button>
            </h2>
            <div id="collapseThirtyThree" class="accordion-collapse collapse" aria-labelledby="headingThirtyThree" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "ready",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:53:03.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyFour" aria-expanded="false" aria-controls="collapseThirtyFour">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/price_detail/1</h3>
                </button>
            </h2>
            <div id="collapseThirtyFour" class="accordion-collapse collapse" aria-labelledby="headingThirtyFour" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "order_id": 1,
                    "price": 555,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:53:55.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyFive" aria-expanded="false" aria-controls="collapseThirtyFive">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/product_repair/1</h3>
                </button>
            </h2>
            <div id="collapseThirtyFive" class="accordion-collapse collapse" aria-labelledby="headingThirtyFive" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "category_id": 2,
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T08:56:30.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtySix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtySix" aria-expanded="false" aria-controls="collapseThirtySix">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/product_brand/1</h3>
                </button>
            </h2>
            <div id="collapseThirtySix" class="accordion-collapse collapse" aria-labelledby="headingThirtySix" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "name": "Phillips",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T09:00:10.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtySeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtySeven" aria-expanded="false" aria-controls="collapseThirtySeven">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/type_repair/1</h3>
                </button>
            </h2>
            <div id="collapseThirtySeven" class="accordion-collapse collapse" aria-labelledby="headingThirtySeven" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "text": "broken_phone",
                    "created_at": "2023-12-19T19:40:09.000000Z",
                    "updated_at": "2023-12-24T09:02:37.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    <h2 class="request get">GET{id}:</h4>
                    <h3>/api/feedback/1</h3>
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                <pre>
                {
                    "id": 1,
                    "text": "changedFeedback",
                    "created_at": "2023-12-25T19:52:04.000000Z",
                    "updated_at": "2023-12-25T19:54:50.000000Z"
                }
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyEight" aria-expanded="false" aria-controls="collapseThirtyEight">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/role/2</h3>
                </button>
            </h2>
            <div id="collapseThirtyEight" class="accordion-collapse collapse" aria-labelledby="headingThirtyEight" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyNine" aria-expanded="false" aria-controls="collapseThirtyNine">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/order/2</h3>
                </button>
            </h2>
            <div id="collapseThirtyNine" class="accordion-collapse collapse" aria-labelledby="headingThirtyNine" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThirtyNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyNine" aria-expanded="false" aria-controls="collapseThirtyNine">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/order/2</h3>
                </button>
            </h2>
            <div id="collapseThirtyNine" class="accordion-collapse collapse" aria-labelledby="headingThirtyNine" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourty">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourty" aria-expanded="false" aria-controls="collapseFourty">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/message/2</h3>
                </button>
            </h2>
            <div id="collapseFourty" class="accordion-collapse collapse" aria-labelledby="headingFourty" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourtyOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyOne" aria-expanded="false" aria-controls="collapseFourtyOne">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/category/2</h3>
                </button>
            </h2>
            <div id="collapseFourtyOne" class="accordion-collapse collapse" aria-labelledby="headingFourtyOne" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourtyTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyTwo" aria-expanded="false" aria-controls="collapseFourtyTwo">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/status/2</h3>
                </button>
            </h2>
            <div id="collapseFourtyTwo" class="accordion-collapse collapse" aria-labelledby="headingFourtyTwo" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourtyThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyThree" aria-expanded="false" aria-controls="collapseFourtyThree">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/price_detail/2</h3>
                </button>
            </h2>
            <div id="collapseFourtyThree" class="accordion-collapse collapse" aria-labelledby="headingFourtyThree" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourtyFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyFour" aria-expanded="false" aria-controls="collapseFourtyFour">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/product_repair/2</h3>
                </button>
            </h2>
            <div id="collapseFourtyFour" class="accordion-collapse collapse" aria-labelledby="headingFourtyFour" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourtyFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyFive" aria-expanded="false" aria-controls="collapseFourtyFive">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/product_brand/2</h3>
                </button>
            </h2>
            <div id="collapseFourtyFive" class="accordion-collapse collapse" aria-labelledby="headingFourtyFive" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourtySix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtySix" aria-expanded="false" aria-controls="collapseFourtySix">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/type_repair/2</h3>
                </button>
            </h2>
            <div id="collapseFourtySix" class="accordion-collapse collapse" aria-labelledby="headingFourtySix" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFourtySeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtySeven" aria-expanded="false" aria-controls="collapseFourtySeven">
                    <h2 class="request delete">DELETE:</h4>
                    <h3>/api/feedback/3</h3>
                </button>
            </h2>
            <div id="collapseFourtySeven" class="accordion-collapse collapse" aria-labelledby="headingFourtySeven" data-bs-parent="#accordionExample">
                <pre>
                {}
                </pre>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>