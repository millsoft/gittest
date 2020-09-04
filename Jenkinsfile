CODE_CHANGES = getGitChanges()

pipeline {
  agent any
  environment {
    VERSION = '1.0.0'
    SERVER_CREDENTIALS = credentials('ssh_piv_stage')
  }
    parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
    }
  stages {
    stage('someTest') {
      when {
        expression {
          BRANCH_NAME == 'master'
        }
      }
      steps {
        echo "Building version ${VERSION}"
        echo "${params.Greeting} World!"
        echo "Server credentials = ${SERVER_CREDENTIALS}"
      }
    }
    stage('Check') {
      steps {
        echo 'Preparing Stuff'
        echo 'Hello World'
        sh '''pwd
whoami
uptime
ls -la'''
      }
    }

  }

  post {
    always {
      echo 'DONE!!!!!!'
    }
  }
}
