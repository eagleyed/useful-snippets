public function rules() {
  return [
    'name' => [
      'required',
    ],
    'email' => [
      'email',
      'required',
      function($attributes, $value, $fail ) {
        if($value != 'whoami@example.com') {
          return $fail('Email is not valid');
        }
      }
    ]
  ];
}
