pipeline {
  agent any
    parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
    }
  stages {
    stage('someTest') {
      steps {
        echo "${params.Greeting} World!"
      }
    }
    stage('Check') {
      steps {
        echo 'Preparing Stuff'
        echo 'Hello World'
        sh '''pwd
whoami
uptime
node --version
ls -la'''
      }
    }

  }
}
