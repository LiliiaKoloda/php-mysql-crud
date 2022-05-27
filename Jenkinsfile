pipeline{
    agent{label 'slave_static'}
    stages{
        stage('Checkout'){
            steps{
                git branch: 'master', url: 'https://github.com/LiliiaKoloda/php-mysql-crud.git'
                sh 'pwd'
            }
        }
        stage('Docker build'){
            steps{
                sh 'docker build -t liliiakoloda/php:lts -f Dockerfile .'
            }
        }
        stage('To DockerHub'){
            steps{
                sh 'docker push liliiakoloda/php:lts'
            }
        }
    }
}



