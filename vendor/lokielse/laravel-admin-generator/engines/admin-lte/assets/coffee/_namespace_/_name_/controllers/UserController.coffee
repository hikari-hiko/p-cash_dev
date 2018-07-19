app.controller 'UserController', ($scope, ngTableParams, User, $uibModal)->
  $scope.filter =
    _: ''

  $scope.edit = (user)->
    $uibModal.open
      templateUrl: 'user-edit-modal.html',
      controller: 'UserEditModalController',
      size: 'lg'
      resolve:
        user: -> user
        readonly: false

  $scope.reload = ->
    $scope.tableParams.reload()

  $scope.defaultData = [
    (id: 1001, name: 'Test1', mobile: '1234561', email: 'test1@example.com', address: 'Shanghai')
    (id: 1002, name: 'Test2', mobile: '1234562', email: 'test2@example.com', address: 'Beijing')
    (id: 1003, name: 'Test3', mobile: '1234563', email: 'test2@example.com', address: 'Chengdu')
  ]

  $scope.tableParams = new ngTableParams({
    page: 1,
    count: 25,
    filter: $scope.filter
  }, {
    total: 0,
    getData: ($defer, params) ->
      data =
        filter: params.filter()
        sorting: params.sorting()
        count: params.count()
        page: params.page()
        total: true,
        _: (new Date).getTime()

      User.get(data).$promise.then((result)->
        $defer.resolve(result.data)
      , ()->
        $defer.resolve($scope.defaultData)
      )

      null
  });