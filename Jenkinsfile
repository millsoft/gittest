pipeline {
  agent {
    docker { image 'php' }
  }
  environment {
    VERSION = '1.0.4'
    SERVER_CREDENTIALS = credentials('ssh_piv_stage')
  }
    parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
    }
  stages {
    stage('someTest') {
      steps {
        echo "Building version ${VERSION}"
        echo "${params.Greeting} World!"
        echo "Server credentials = ${SERVER_CREDENTIALS}"
        sh 'php --version'
        sh 'ls -lah /'
      }
    }
    stage('Check') {
      steps {
        echo 'Preparing Stuff'
        echo 'Hello World'
        sh '''pwd
ls -la'''
      }
    }

  }
}
