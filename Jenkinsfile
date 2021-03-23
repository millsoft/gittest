pipeline {
  agent any
  environment {
    VERSION = '1.0.4'
    SERVER_CREDENTIALS = credentials('ssh_piv_stage')
  }
    parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
    }
  stages {
    stage('SSHtest') {
      steps {
        sshagent(credentials : ['jenkins-pem']) {
          sh "ssh root@vm-dev ls"
        }
      }
    }
  }
}
